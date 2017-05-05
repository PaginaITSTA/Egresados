<?php

require("Buss.php");
header("Content-Type: text/html;charset=utf-8");

class Controlador{
	
	public function __contruct(){
	}

	//---------------------------------------------------------------------------
	//Validación del usuario de la clase Login//---------------------------------
	//---------------------------------------------------------------------------
	public function validaUsuario($claseLogin){
		$temp = $claseLogin;
		$classBuss = new Buss();
		return $classBuss->validUser($temp);
		
	}
	//---------------------------------------------------------------------------
	
	
	
	//---------------------------------------------------------------------------
	//Select de la clase Cuestionario egresados//--------------------------------
	//---------------------------------------------------------------------------
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
	//Select de la clase Cuestionario egresados
	public function carreras(){
		$classBuss = new Buss();
		return $classBuss->BussCarreras();
	}
	//---------------------------------------------------------------------------
	
	
	
	//---------------------------------------------------------------------------
	//Tabla uno de la clase Encuesta egresados//---------------------------------
	//---------------------------------------------------------------------------
	public function getTabla1(){
		$classBuss = new Buss();
		return $classBuss->BussGetTabla1();
	}
	//Guarda encuesta Egresados
	public function guardaEncuestaE(){
		$classBuss = new Buss();
		return $classBuss->BussGetTabla1();
	}
	//---------------------------------------------------------------------------
	
	
	
	
	//---------------------------------------------------------------------------
	//Tabla uno de la clase Encuesta egresados//---------------------------------
	//---------------------------------------------------------------------------
	//Guarda cuestionario egresados
	public function cuestionarioEgresados($claseCE){
		$temp = $claseCE;
		$classBuss = new Buss();
		$classBuss->BussGuardaCuestionario($temp);
	}
	//---------------------------------------------------------------------------
}
?>
















