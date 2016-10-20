<?php
require_once('model/model.php');

class ContactoModel extends Model {

	private $contacto;

	function getContacto(){
		$contacto = array();
		$consulta = $this->db->prepare("SELECT * FROM contacto");
		$consulta->execute();
		$contacto = $consulta->fetchAll();
		return $contacto;
	}

	function agregarContacto($nombre,$apellido,$ciudad,$lugar,$recomendacion){
		$contacto  = array($nombre,$apellido,$ciudad,$lugar,$recomendacion);
	    $consulta = $this->db->prepare('INSERT INTO contacto (nombre,apellido,ciudad,lugar,recomendacion) VALUES(?,?,?,?,?)');
	  	$consulta->execute($contacto);
	  	return $consulta;
	}
}

?>