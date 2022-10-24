<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];

include_once ("conexion.php");

$consulta = $BD->prepare("DELETE FROM usuarios WHERE id = ?;");
$resultado = $consulta->execute([$id]);

if($resultado === TRUE){
    header("Location: consultarAES.php");
    die();
} else{
    echo "Algo salió mal";
} 
?>