<?php 
	include_once 'controller/controller.php';
	include_once 'view/home_view.php';
	include_once 'model/partes_model.php';

	class AdminController extends Controller {

    	function __construct(){
    	  $this->model = new PartesModel();
    	  $this->view = new homeView();
    	}

		function mostrarAdmin(){
			$partes =  $this->model->getParte();
			$this->view->mostrarAdmin($partes, null);
		}
    }


?>