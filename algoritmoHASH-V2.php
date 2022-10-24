<?php

if(!isset($_POST["nombre"]) || !isset($_POST["telefono"]) ||  !isset($_POST["usuario"]) || !isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["id_tipo"])) exit();

include_once "conexion.php";

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$id_tipo = $_POST["id_tipo"];
$password = sha1($_POST["password"]);



$sentencia = $BD->prepare("INSERT INTO usuarios(nombre,telefono,usuario, email, password, id_tipo) VALUES (?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre,$telefono,$usuario, $email, $password,  $id_tipo]); 


if($resultado === TRUE){
    header("Location: consultarHASH-V2.php");
    die();
}else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>
<?php