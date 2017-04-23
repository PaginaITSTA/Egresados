<?php
class EcuestaEgresados{
	private $SE_nombre = "";
	private $SE_carrera = "";
	private $SE_generacion = "";
	private $SE_empresaTrabajo = "";
	private $SE_sectorTrabajo = "";
	private $respuesta = "";
	private $pregunta = "";



function __contruct(){
		
	}

	public function __setSE_nombre($SE_nombre){
		$this->SE_nombre = $SE_nombre;
	}
	
	public function __setSE_carrera($SE_carrera){
		$this->SE_carrera = $SE_carrera;
	}
	
	public function __setSE_generacion($SE_generacion){
		$this->SE_generacion = $SE_generacion;
	}

	public function __setSE_empresaTrabajo($SE_empresaTrabajo){
		$this->SE_empresaTrabajo = $SE_empresaTrabajo;
	}

	public function __setSE_sectorTrabajo($SE_sectorTrabajo){
		$this->SE_sectorTrabajo = $SE_sectorTrabajo;
	}
	
	public function __setpregunta($pregunta){
		$this->pregunta = $pregunta;
	}
	
	public function __setrespuesta($respuesta){
		$this->respuesta = $respuesta;
	}
	
	
	
	
	public function __getSE_nombre(){
		return "{$this->SE_nombre}";
	}
	
	public function __getSE_carrera(){
		return "{$this->SE_carrera}";
	}
	
	public function _getSE_generacion(){
		return "{$this->SE_generacion}";
	}
	
	public function __getSE_empresaTrabajo(){
		return "{$this->SE_empresaTrabajo}";
	}
	
	public function __getSE_sectorTrabajo(){
		return "{$this->SE_sectorTrabajo}";
	}
	
	public function __getpregunta(){
		return "{$this->pregunta}";
	}
	
	public function __getrespuesta(){
		return "{$this->respuesta}";
	}

}
?>