<?php

require("Buss.php");

class Controlador{
	
	public function __contruct(){
	}

	public function validaUsuario($claseLogin){
		$temp = $claseLogin;
		$classBuss = new Buss();
		return $classBuss->validUser($temp);
		
	}
	
	public function sectorEmpresa(){
		$classBuss = new Buss();
		return $classBuss->BussSectorEmpresa();
	}
	
	public function puestoEmpresa(){
		$classBuss = new Buss();
		return $classBuss->BusspuestoEmpresa();
	}
	
	public function sizeOrganitation(){
		$classBuss = new Buss();
		return $classBuss->BussSizeOrganitation();
	}
}
?>