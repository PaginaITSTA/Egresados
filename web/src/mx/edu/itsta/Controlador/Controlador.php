<?php

require("Buss.php");

class Controlador{
	
	public function __contruct(){
	}

	
	//Validación del usuario de la clase Login
	public function validaUsuario($claseLogin){
		$temp = $claseLogin;
		$classBuss = new Buss();
		return $classBuss->validUser($temp);
		
	}
	
	
	
	//Select de la clase Cuestionario egresados
	public function sectorEmpresa(){
		$classBuss = new Buss();
		return $classBuss->BussSectorEmpresa();
	}
	//Select de la clase Cuestionario egresados
	public function puestoEmpresa(){
		$classBuss = new Buss();
		return $classBuss->BusspuestoEmpresa();
	}
	//Select de la clase Cuestionario egresados
	public function sizeOrganitation(){
		$classBuss = new Buss();
		return $classBuss->BussSizeOrganitation();
	}
	
	
	
	//Tabla uno de la clase Encuesta egresados
	public function getTabla1(){
		$classBuss = new Buss();
		return $classBuss->BussGetTabla1();
	}
	//Tabla uno de la clase Encuesta egresados
	/*
	public function getTabla2(){
		$classBuss = new Buss();
		return $classBuss->BussGetTabla2();
	}
	//Tabla uno de la clase Encuesta egresados
	public function getTabla3(){
		$classBuss = new Buss();
		return $classBuss->BussGetTabla3();
	}
	*/
}
?>