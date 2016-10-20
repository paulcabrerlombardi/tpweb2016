<?php

  include_once 'config/config_app.php';
  include_once 'controller/home_controller.php';
  include_once 'controller/admin_controller.php';
  include_once 'controller/partes_controller.php';
  include_once 'controller/riders_controller.php';
  include_once 'controller/contacto_controller.php';

  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){
    $homeController = new HomeController();
    $homeController->mostrarDefault();
  }
  else
    switch ($_REQUEST[ConfigApp::$ACTION]){

    case ConfigApp::$ACTION_HOME:
      $homeController = new HomeController();
      $homeController->mostrarHome();
    break;

    case ConfigApp::$ACTION_PARTES:
      $partesController = new PartesController();
      $partesController->mostrarPartes();
    break;
    case ConfigApp::$ACTION_PARTES_SKATE:
      $partesController = new PartesController();
      $partesController->mostrarPartesSkate();
    break;
    case ConfigApp::$ACTION_RIDERS:
      $ridersController = new RidersController();
      $ridersController->mostrarRiders();
    break;
    case ConfigApp::$ACTION_CONTACTO:
      $contactoController = new ContactoController();
      $contactoController->mostrarContacto();
    break;
    case ConfigApp::$ACTION_AGREGAR_CONTACTO:
      $contactoController = new ContactoController();
      $contactoController->agregarContacto();
    break;
    case ConfigApp::$ACTION_ADMIN:
      $adminController = new AdminController();
      $adminController->mostrarAdmin();
    break;
    case ConfigApp::$ACTION_AGREGAR_PARTE:
      $partesController = new PartesController();
      $partesController->agregarParte();
    break;
    case ConfigApp::$ACTION_BORRAR_PARTE:
      $partesController = new PartesController();
      $partesController->borrarParte();
    break;
    case ConfigApp::$ACTION_EDITAR_PARTE:
      $partesController = new PartesController();
      $partesController->editarParte();
    break;
    default:
      echo 'Pagina no encontrada';
      break;
    }

?>
