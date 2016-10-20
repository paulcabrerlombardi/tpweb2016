<?php

  include_once 'controller/controller.php';
  include_once 'view/home_view.php';
  include_once 'model/partes_model.php';

  class HomeController extends Controller {

    function __construct(){
      $this->model = new PartesModel();
      $this->view = new homeView();
    }

    function mostrarDefault(){
      $this->view->mostrarDefault();
    }

    function mostrarHome(){
      $this->view->mostrarHome();
    }

    /** -------------------------------------------------- Esta en partes_controller.php -------------------------------------------------------**/

    //function mostrarPartes(){
    // $partes = $this->model->getParte();
    //  $this->view->mostrarPartes($partes);
    //}
    /** --------------------------------------------agrega un parte de la bici a la BBDD(Partes) ------------------------------------------------------**/
    //function agregarParte(){
    //  $nombre = $_REQUEST['nombre'];
    //  $marca = $_REQUEST['marca'];
    //  $precio = $_REQUEST['precio'];
    //  $carga =  $this->model->agregarParte($nombre,$marca,$precio);
    //  $partes =  $this->model->getParte();
   
    //  $this->view->mostrarAdmin($partes, $carga);
    //}

    /** -------------------------------------------------- Esta en riders_controller.php -------------------------------------------------------**/
    //function mostrarRiders(){
    // $this->view->mostrarRiders();
    //}

    /** -------------------------------------------------- Esta en contacto_controller.php -------------------------------------------------------**/

    //function mostrarContacto(){
    //  $contactos = $this->model->getContacto();
    //  $this->view->mostrarContacto($contactos);
    //}

    /** -------------------------------------------------- Esta en admin_controller.php -----------------------------------------------------**/
    //function mostrarAdmin(){
    //  $partes =  $this->model->getParte();
    //  $this->view->mostrarAdmin($partes, null);
    //}

    
  }

?>
