<?php
require_once "PasswordHash.php";

function encriptar ($pass){

	// Creamos el objeto que nos permitirá gestionar nuestro hash
	$hasher = new PasswordHash(8, FALSE);

	// Generamos el hash

	$hash = $hasher->HashPassword($pass);

	return $hash;
}

function comparar_pass ($pass,$hash){

	$hasher = new PasswordHash(8, FALSE);
	
	return $hasher->CheckPassword($pass, $hash);
}


?>
