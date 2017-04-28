<?php

require("DAOcuestionarioEgresados.php");

class Buss{
	
	private static $classDAOCE;
	
	
	public function __construct(){
		$this->classDAOCE = new DAOCuestionario();
	}
		
	public function validUser($claseLogin){
		$temp = $claseLogin;
		
		unset($classDAOCE);
		require("LogDAO.php");
		$this->classDAOCE = new DAOLogin();
		
		return $classDAOCE->Login($temp);
		
	}

	public function BussSectorEmpresa(){
		$arrTemp = $this->classDAOCE->sectorEmpresa();
		return $arrTemp;
	}

	public function BusspuestoEmpresa(){
		$temp = $this->classDAOCE;
		$arrTemp = $temp->puestoEmpresa();
		return $arrTemp;
	}
	
	public function BussSizeOrganitation(){
		$arrTemp = $this->classDAOCE->organitationSize();
		return $arrTemp;
	}
}
?>