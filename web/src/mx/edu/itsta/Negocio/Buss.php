<?php
//Importa base de datos 
require('../Connection/conect.php');
require('../Connection/operaciones.php');

//Importa clases de tipo
require("../Controlador/DAOcuestionarioEgresados.php");
require("/Controlador/LogDAO.php");

class Buss{
	
	private static $classDAOCE;
	private static $classLogin;
	private static $user;
	
	public function __construct(){
		$this->classDAOCE = new DAOCuestionario();
		$this->classLogin = new DAOLogin();
		$this->user = new operationDB();
	}
		
	public function validUser($claseLogin){
		$temp = $claseLogin;
		
		return $this->classLogin->Login($temp, $this->user);
		
	}

	public function BussSectorEmpresa(){
		$arrTemp = $this->classDAOCE->sectorEmpresa($this->user);
		return $arrTemp;
	}

	public function BusspuestoEmpresa(){
		$temp = $this->classDAOCE;
		$arrTemp = $temp->puestoEmpresa($this->user);
		return $arrTemp;
	}
	
	public function BussSizeOrganitation(){
		$arrTemp = $this->classDAOCE->organitationSize($this->user);
		return $arrTemp;
	}
}
?>