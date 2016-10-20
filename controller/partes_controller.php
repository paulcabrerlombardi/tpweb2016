<?php 
	include_once 'controller/controller.php';
	include_once 'view/home_view.php';
	include_once 'model/partes_model.php';

	class PartesController extends Controller {

    	function __construct(){
    		$this->model = new PartesModel();
    		$this->view = new homeView();
    	}

    	function mostrarPartes(){
    		$partes = $this->model->getParte();
    		$this->view->mostrarPartes($partes);
    	}

        function mostrarPartesSkate(){
            $partes = $this->model->getParteSkate();
            $this->view->mostrarPartesSkate($partes);
        }

    	function agregarParte(){
            $imagen = $_FILES['image'];
	    	$nombre = $_REQUEST['nombre'];
	    	$marca = $_REQUEST['marca'];
	    	$precio = $_REQUEST['precio'];

	    	$carga =  $this->model->agregarParte($nombre,$marca,$precio,$imagen);
	    	$partes =  $this->model->getParte();
            $imagenes = $this->model->getImagen();
	   		$this->view->mostrarAdmin($partes, $carga, $imagenes);
    
    	}
        function borrarParte(){
            if (isset($_POST["id"])){
                $id = $_POST["id"];
                $this->model->borrarParte($id);
             }

        }

        function editarParte(){
            $carga = true;
            switch ($_POST['editar']) {
                case 1:
                $nombre = $_POST['dato'];
                $this->model->editarNombre($nombre, $_POST['id_producto']);
                $partes =  $this->model->getParte();
                $imagenes = $this->model->getImagen();
                $this->view->mostrarAdmin($partes, $carga, $imagenes);
                break;
                case 2 :
                $marca = $_POST['dato'];
                $this->model->editarMarca($marca, $_POST['id_producto']);
                $partes =  $this->model->getParte();
                $imagenes = $this->model->getImagen();
                $this->view->mostrarAdmin($partes, $carga, $imagenes);
                break;
                case 3:
                $precio = $_POST['dato'];
                $this->model->editarPrecio($precio, $_POST['id_producto']);
                $partes =  $this->model->getParte();
                $imagenes = $this->model->getImagen();
                $this->view->mostrarAdmin($partes, $carga, $imagenes);
                break;
            }
        }
    }
?>