<?php
class cuestionarioEgresados{
	
	private $SE_noControl = "";
	private $SE_carrera = "";
	private $SE_nombre = "";
	private $SE_direccion = "";
	
	
	
	function __contrusct(){
		
	}
	
	//Area de setters
	
	public function __setSE_noControl($SE_noControl){
		$this->SE_noControl = $SE_noControl;
	}
	
	public function __setSE_carrera($SE_carrera){
		$this->SE_carrera = $SE_carrera;
	}
	
	public function __setSE_nombre($SE_nombre){
		$this->SE_nombre = $SE_nombre;
	}
	
	public function __setSE_direccion($SE_direccion){
		$this->SE_direccion = $SE_direccion;
	}
	
	//Area de getters
	
	public function __getSE_noControl(){
		return "{$this->SE_noControl}";
	}
	
	public function __getSE_carrera(){
		return "{$this->SE_carrera}";
	}
	
	public function __getSE_nombre(){
		return "{$this->SE_nombre}";
	}
	
	public function __getSE_direccion(){
		return "{$this->SE_direccion}";
	}
}
?>