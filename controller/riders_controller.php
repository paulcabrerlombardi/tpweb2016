<?php 
	include_once 'controller/controller.php';
	include_once 'view/home_view.php';
	include_once 'model/partes_model.php';

	class RidersController extends Controller {

		function __construct(){
			$this->model = new PartesModel();
			$this->view = new homeView();
		}

		function mostrarRiders(){
			$this->view->mostrarRiders();
		}
	}
?>