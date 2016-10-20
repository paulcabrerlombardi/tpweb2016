<?php
	require_once 'view/view.php';
	
	class HomeView extends View{
	
		function mostrarDefault(){
			$this->smarty->display('index.tpl');
		}

		function mostrarHome(){
			$this->smarty->display('home.tpl');
		}

		function mostrarPartes($partes){
			$this->smarty->assign('partes',$partes);
			$this->smarty->display('partes.tpl');
		}

		function mostrarPartesSkate($partes){
			$this->smarty->assign('partes',$partes);
			$this->smarty->display('partesskate.tpl');
		}
		function mostrarRiders(){
			$this->smarty->display('riders.tpl');
		}
		function mostrarContacto($contactos){
			$this->smarty->assign('contactos',$contactos);
			$this->smarty->display('contacto.tpl');
		}
		function mostrarAdmin($partes, $seAgrego){
			$this->smarty->assign('seAgrego',$seAgrego);
			$this->smarty->assign('partes',$partes);
			$this->smarty->display('admin.tpl');
		}
	}

?>
