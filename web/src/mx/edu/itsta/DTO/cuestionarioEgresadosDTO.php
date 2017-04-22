<?php
class cuestionarioEgresados{
	
	private $SE_noControl = "";
	private $SE_carrera = "";
	private $SE_nombre = "";
	private $SE_direccion = "";
	private $SE_telefono = "";
	private $SE_telMovil = "";
	private $SE_email = "";
	private $SE_pEgreso = "";
	private $SE_generacion = "";
	private $SE_estudia = "";
	private $SE_estudioActual = "";
	private $SE_empresaTrabajo = "";
	private $SE_trabajoEspecialidad = "";
	private $SE_sectorTrabajo = "";
	private $SE_puestoTrabajo = "";
	private $SE_tamanoEmpresa = "";
	
	
	
	function __contruct(){
		
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
	
	public function __setSE_telefono($SE_telefono){
		$this->SE_telefono = $SE_telefono;
	}
	
	public function __setSE_telMovil($SE_telMovil){
		$this->SE_telMovil = $SE_telMovil;
	}
	
	public function __setSE_email($SE_email){
		$this->SE_email = $SE_email;
	}
	
	public function __setSE_pEgreso($SE_pEgreso){
		$this->SE_pEgreso = $SE_pEgreso;
	}
	
	public function __setSE_generacion($SE_generacion){
		$this->SE_generacion = $SE_generacion;
	}
	
	public function __setSE_estudia($SE_estudia){
		$this->SE_estudia = $SE_estudia;
	}
	
	public function __setSE_estudioActual($SE_estudioActual){
		$this->SE_estudioActual = $SE_estudioActual;
	}
	
	public function __setSE_empresaTrabajo($SE_empresaTrabajo){
		$this->SE_empresaTrabajo = $SE_empresaTrabajo;
	}
	public function __setSE_trabajoEspecialidad($SE_trabajoEspecialidad){
		$this->SE_trabajoEspecialidad = $SE_trabajoEspecialidad;
	}
	
	public function __setSE_sectorTrabajo($SE_sectorTrabajo){
		$this->SE_sectorTrabajo = $SE_sectorTrabajo;
	}
	
	public function __setSE_puestoTrabajo($SE_puestoTrabajo){
		$this->SE_puestoTrabajo = $SE_puestoTrabajo;
	}
	
	public function __setSE_tamanoEmpresa($SE_tamanoEmpresa){
		$this->SE_tamanoEmpresa = $SE_tamanoEmpresa;
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
	
	public function __getSE_telefono(){
		return "{$this->SE_telefono}";
	}
	
	public function __getSE_telMovil(){
		return "{$this->SE_telMovil}";
	}
	
	public function __getSE_email(){
		return "{$this->SE_email}";
	}
	
	public function __getSE_pEgreso(){
		return "{$this->SE_pEgreso}";
	}
	
	public function _getSE_generacion(){
		return "{$this->SE_generacion}";
	}
	
	public function __getSE_estudia(){
		return "{$this->SE_estudia}";
	}
	
	public function __getSE_estudioActual(){
		return "{$this->SE_estudioActual}";
	}
	
	public function __getSE_empresaTrabajo(){
		return "{$this->SE_empresaTrabajo}";
	}
	
	public function __getSE_trabajoEspecialidad(){
		return "{$this->SE_trabajoEspecialidad}";
	}
	
	public function __getSE_sectorTrabajo(){
		return "{$this->SE_sectorTrabajo}";
	}
	
	public function __getSE_puestoTrabajo(){
		return "{$this->SE_puestoTrabajo}";
	}
	
	public function __getSE_tamanoEmpresa(){
		return "{$this->SE_tamanoEmpresa}";
	}
}
?>