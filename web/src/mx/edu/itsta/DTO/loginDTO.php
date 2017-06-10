<?php
class Login{
	private $correo = "nombreDefault";
	private $tipoUsuario = "tipoDefault";
	private $pass = "passDefault";
	private $numeroControl = 'numeroDefault';
	
	function __contruct(){
		
	}
	
	public function __getPass(){
		return "{$this->pass}";
	}
	
	public function __getCorreo(){
		return $this->nomUsuario;
	}
	
	public function __getTipoUsuario(){
		return "{$this->tipoUsuario}";
	}
	
	public function __getNumeroCotrol(){
		return "{$this->numeroControl}";
	}
	
	public function __setPass($pass){
		$this->pass = $pass;
	}
	
	public function __setCorreo($nomUsuario){
		$this->nomUsuario = $nomUsuario;
	}
	
	public function __setTipoUsuario($tipoUsuario){
		$this->tipoUsuario = $tipoUsuario;
	}
	
	public function __setNumeroControl($numeroControl){
		$this->numeroControl = $numeroControl;
	}
}
?>