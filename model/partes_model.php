<?php
require_once('model/model.php');

class PartesModel extends Model {

	private $parte;


	function getParte(){
		$parte = array();
		$consulta = $this->db->prepare("SELECT imagen.ruta, parte.nombre, parte.marca, parte.precio, parte.id_parte FROM parte 
			INNER JOIN imagen ON imagen.id_partes = parte.id_parte");
		$consulta->execute();
		$parte = $consulta->fetchAll();
		return $parte;
	}

	function getParteSkate(){
		$parteSkate = array();
		$consulta = $this->db->prepare("SELECT imagenSkate.ruta, parteSkate.nombre, parteSkate.marca, parteSkate.precio, parteSkate.id_parte FROM parteSkate 
			INNER JOIN imagenSkate ON imagenSKate.id_parte = parteSkate.id_parte");
		$consulta->execute();
		$parteSkate= $consulta->fetchAll();
		return $parteSkate;
	}

	function agregarParte($nombre,$marca,$precio,$imagen){
		$parte = array($nombre,$marca,$precio);
	    $consulta = $this->db->prepare('INSERT INTO parte (nombre,marca,precio) VALUES(?,?,?)');
	  	$consulta->execute($parte);
		$id = $this->db->lastInsertId();
		$this->agregarImagen($imagen,$id);
		return $consulta;
	}
	
	function borrarParte($id_parte){
		$consulta = $this->db->prepare('DELETE FROM parte WHERE id_parte=?');
	  	$consulta->execute(array ($id_parte));
	}

	function getImagen(){
		$imagen = array();
		$consulta = $this->db->prepare("SELECT * FROM imagen");
		$consulta->execute();
		$imagen = $consulta->fetchAll();
		return $imagen;
	}

	function agregarImagen($file,$id_partes){
		$cant = count($file['name']);
		$consulta = $this->db->prepare('INSERT INTO imagen(ruta,id_partes) VALUES (:ruta,:id_partes)');
		$consulta->bindParam(':ruta',$ruta);
		$consulta->bindParam(':id_partes',$id_partes);

		for ($i=0; $i < $cant; $i++) { 
		
			$ruta = "images/" . $file['name'][$i];
			$origen = $file['tmp_name'][$i];
			$id_partes = $id_partes;
			move_uploaded_file($origen, $ruta);
			$consulta->execute();

		}
	}

	function editarNombre($nombre, $id){
		$consulta = $this->db->prepare('UPDATE parte SET nombre = ? WHERE id_parte = ?');
		$consulta->execute(array($nombre,$id));
	}
	function editarMarca($marca, $id){
		$consulta = $this->db->prepare('UPDATE parte SET marca = ? WHERE id_parte = ?');
		$consulta->execute(array($marca,$id));
	}

	function editarPrecio($precio, $id){
		$consulta = $this->db->prepare('UPDATE parte SET precio = ? WHERE id_parte = ?');
		$consulta->execute(array($precio,$id));
	}

}
?>
