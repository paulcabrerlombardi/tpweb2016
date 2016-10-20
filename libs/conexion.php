<?php

function crearConexion()
{
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="partes";

	$conexion=new mysqli($servidor,$usuario,$password,$bd);

	if($conexion->connect_error) die ("No se pudo conectar al servidor de BD Mysql");

	return $conexion;
}

?>
