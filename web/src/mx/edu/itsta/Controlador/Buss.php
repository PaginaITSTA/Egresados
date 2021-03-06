<?php
//Importa base de datos 
require('conect.php');
require('operaciones.php');

//Importa clases de tipo
require("DAOcuestionarioEgresados.php");
require("LogDAO.php");
require("DAOencuestaEgresados.php");
require("DAORegistro.php");


header("Content-Type: text/html;charset=utf-8");

class Buss{
	
	
	//Objetos estaticos y privados de tipo clase
	private static $classDAOCE;
	private static $classLogin;
	private static $classDAOEE;
	private static $classRegistro;
	
	//Objeto que hace una única conección a la base de datos.
	private static $user;
	
	
	//Contructor de la clase
	public function __construct(){
		$this->classDAOCE = new DAOCuestionario();
		$this->classLogin = new DAOLogin();
		$this->classDAOEE = new DAOEncuestaEgresados();
		$this->classRegistro = new RegistroDAO();
		
		//Coneccion a la base de datos
		$this->user = new operationDB();
	}
		
	//Valida al usuario
	public function validUser($claseLogin){
		$temp = $claseLogin;
		return $this->classLogin->Login($temp, $this->user);
	}
	
	//---------------------------------------------------------------------------
	//Metodos de la clase Cuestionario egresados
	
	public function BussGuardaCuestionario($claseCE){
		$temp = $claseCE;
		$this->classDAOCE->guardaCuestionario($temp, $this->user);
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
	
	public function BussCarreras(){
		$arrTemp = $this->classDAOCE->carreras($this->user);
		return $arrTemp;
	}
	//---------------------------------------------------------------------------
	
	
	//---------------------------------------------------------------------------
	//Metodos de la clase Encuesta egresados
	public function BussGetTabla1(){
		$arrTemp = $this->classDAOEE->tabla($this->user);
		return $arrTemp;
	}
	
	public function BussGuardaEncuestaEgresados($claseEnEgre){
		$temp = $claseEnEgre;
		$this->classDAOEE->guardarValores($temp, $this->user);
	}
	//---------------------------------------------------------------------------
	
	
	//---------------------------------------------------------------------------
	//Metodos de la clase Registro previo (Temporal)
	public function BussGuardaTemporal($claseRegistroPrevio){
		$temp = $claseRegistroPrevio;
		return $this->classRegistro->guardaRegistro($temp, $this->user);
	}
	
	public function BussVerTablaTemporal(){
		return $this->classRegistro->verTablaTemporal($this->user);
	}
	
	public function BussVerTablaAlumnos(){
		return $this->classRegistro->verAlumnos($this->user);
	}
	//---------------------------------------------------------------------------
}
?>