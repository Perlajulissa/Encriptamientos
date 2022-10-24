<?php

//funcion para crear llave de cifrado de contraseña
function generatekey(){
    $key = "";
    $pattern = "1234567890abcdefghijklmñnopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    $max = strlen($pattern)-1;
    for($i = 0; $i < 10; $i++){
        $key .= substr($pattern, mt_rand(0,$max), 1);
    }
    return $key;
}

//funcion para encriptar de forma AES
function cifrarAES($passW, $llave, $inivec){
    return openssl_encrypt($passW, 'aes-256-cbc', $llave, false, $inivec);    
}

$keyAES = generatekey();
$inivec = base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc')));

#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre"]) || !isset($_POST["telefono"]) || !isset($_POST["usuario"]) || !isset($_POST["email"]) || !isset($_POST["psw"]) || !isset($_POST["id_tipo"])) exit();

include_once "conexion.php";

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$id_tipo = $_POST["id_tipo"];
$psw = $_POST["psw"];

//contraseña encriptada
$pswd=cifrarAES($psw, $keyAES, $inivec);

$sentencia = $BD->prepare("INSERT INTO usuarios(nombre,telefono,usuario, email, password, keyAES, inivec, id_tipo) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre,$telefono,$usuario ,$email, $pswd, $keyAES, $inivec, $id_tipo]); 


if($resultado === TRUE){
    header("Location: consultarAES.php");
    die();
}else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>