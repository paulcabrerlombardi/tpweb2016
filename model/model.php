<?php
require_once('libs/conexion.php');

  class Model{
   protected $db;
		function __construct() {
	     	$this->db = new PDO('mysql:host=localhost;dbname=partes;charset=utf8', 'root', '');
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    }
  }
?>
