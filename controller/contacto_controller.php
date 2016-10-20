<?php 
	include_once 'controller/controller.php';
	include_once 'view/home_view.php';
	include_once 'model/contacto_model.php';

	class ContactoController extends Controller {

		function __construct(){
			$this->model = new ContactoModel();
			$this->view = new homeView();
		}
		function mostrarContacto(){
    		$contactos = $this->model->getContacto();
    		$this->view->mostrarContacto($contactos);
    	}

    	function agregarContacto(){
	    	$nombre = $_REQUEST['nombre'];
	    	$apellido = $_REQUEST['apellido'];
	    	$ciudad = $_REQUEST['ciudad'];
	    	$lugar = $_REQUEST['lugar'];
	    	$recomendacion = $_REQUEST['recomendacion'];
	    	$carga =  $this->model->agregarContacto($nombre,$apellido,$ciudad,$lugar,$recomendacion);
	    	$contactos =  $this->model->getContacto();
	   		$this->view->mostrarContacto($contactos);
    
    	}
	}
?>