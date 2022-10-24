<?php

$contraseña = "";
$usuario = "root";
$BD = "encriptamientos";

try{
	$BD = new PDO('mysql:host=localhost;dbname=' . $BD, $usuario, $contraseña);
}catch(Exception $respuesta){
	echo "Ocurrió algo con la base de datos: " . $respuesta->getMessage();
}





?>