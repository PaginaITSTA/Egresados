<?php
class EncuestaEgresados{
	//Encabezado de la pagina
	private $SE_nombre = "";
	private $SE_carrera = "";
	private $SE_generacion = "";
	private $SE_empleoActual = "";
	private $SE_giroEmpresa = "";
	
	
	private $pregunta1 = "";
	private $pregunta2 = "";
	private $pregunta3 = "";
	private $pregunta4 = "";
	private $pregunta5 = "";
	private $pregunta6 = "";
	private $pregunta7 = "";
	private $pregunta8 = "";
	private $pregunta9 = "";
	private $pregunta10 = "";
	private $pregunta11 = "";
	private $pregunta12 = "";
	private $pregunta13 = "";
	private $pregunta14 = "";
	

	//Constructor de la clase
	function __construct(){
		
	}

	
	//----------------------------------------------------------------------------------------
	//Encabezado de la página//---------------------------------------------------------------
	//----------------------------------------------------------------------------------------
	public function __setSE_nombre($SE_nombre){
		$this->SE_nombre = $SE_nombre;
	}
	
	public function __setSE_carrera($SE_carrera){
		$this->SE_carrera = $SE_carrera;
	}
	
	public function __setSE_generacion($SE_generacion){
		$this->SE_generacion = $SE_generacion;
	}

	public function __setSE_empleoActual($SE_empleoActual){
		$this->SE_empleoActual = $SE_empleoActual;
	}

	public function __setSE_giroEmpresa($SE_giroEmpresa){
		$this->SE_giroEmpresa = $SE_giroEmpresa;
	}
	//----------------------------------------------------------------------------------------
	
	
	
	//----------------------------------------------------------------------------------------
	//Preguntas//-----------------------------------------------------------------------------
	//----------------------------------------------------------------------------------------
	public function __setPregunta1($pregunta){
		$this->pregunta1 = $pregunta;
	}
	
	public function __setPregunta2($pregunta){
		$this->pregunta2 = $pregunta;
	}
	
	public function __setPregunta3($pregunta){
		$this->pregunta3 = $pregunta;
	}
	
	public function __setPregunta4($pregunta){
		$this->pregunta4 = $pregunta;
	}
	
	public function __setPregunta5($pregunta){
		$this->pregunta5 = $pregunta;
	}
	
	public function __setPregunta6($pregunta){
		$this->pregunta6 = $pregunta;
	}
	
	public function __setPregunta7($pregunta){
		$this->pregunta7 = $pregunta;
	}
	
	public function __setPregunta8($pregunta){
		$this->pregunta8 = $pregunta;
	}
	
	public function __setPregunta9($pregunta){
		$this->pregunta9 = $pregunta;
	}
	
	public function __setPregunta10($pregunta){
		$this->pregunta10 = $pregunta;
	}
	
	public function __setPregunta11($pregunta){
		$this->pregunta11 = $pregunta;
	}
	
	public function __setPregunta12($pregunta){
		$this->pregunta12 = $pregunta;
	}
	
	public function __setPregunta13($pregunta){
		$this->pregunta13 = $pregunta;
	}
	
	public function __setPregunta14($pregunta){
		$this->pregunta14 = $pregunta;
	}
	
	
	
	//----------------------------------------------------------------------------------------
	//Encabezado de la página//---------------------------------------------------------------
	//----------------------------------------------------------------------------------------
	public function __getSE_nombre(){
		return "{$this->SE_nombre}";
	}
	
	public function __getSE_carrera(){
		return "{$this->SE_carrera}";
	}
	
	public function _getSE_generacion(){
		return "{$this->SE_generacion}";
	}
	
	public function __getSE_empleoActual(){
		return "{$this->SE_empleoActual}";
	}
	
	public function __getSE_giroEmpresa(){
		return "{$this->SE_giroEmpresa}";
	}
	//----------------------------------------------------------------------------------------
	
	
	
	
	//----------------------------------------------------------------------------------------
	//Getters de las preguntas//--------------------------------------------------------------
	//----------------------------------------------------------------------------------------
	public function __getpregunta1(){
		return "{$this->pregunta1}";
	}
	
	public function __getpregunta2(){
		return "{$this->pregunta2}";
	}
	
	public function __getpregunta3(){
		return "{$this->pregunta3}";
	}
	
	public function __getpregunta4(){
		return "{$this->pregunta4}";
	}
	
	public function __getpregunta5(){
		return "{$this->pregunta}";
	}
	
	public function __getpregunta6(){
		return "{$this->pregunta}";
	}
	
	public function __getpregunta7(){
		return "{$this->pregunta}";
	}
	
	public function __getpregunta8(){
		return "{$this->pregunta}";
	}
	
	public function __getpregunta9(){
		return "{$this->pregunta}";
	}
	
	public function __getpregunta10(){
		return "{$this->pregunta}";
	}
	
	public function __getpregunta11(){
		return "{$this->pregunta}";
	}
	
	public function __getpregunta12(){
		return "{$this->pregunta}";
	}
	
	public function __getpregunta13(){
		return "{$this->pregunta}";
	}
	
	public function __getpregunta14(){
		return "{$this->pregunta}";
	}

}
?>