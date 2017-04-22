<?php
class Login{
	private $nomUsuario = "nombreDefault";
	private $tipoUsuario = "tipoDefault";
	private $pass = "passDefault";
	
	/*
	function __contruct($nomUsuario, $tipoUsuario, $pass){
		$this->nomUsuario = $nomUsuario;
		$this->tipoUsuario = $tipoUsuario;
		$this->pass = $pass;
	}
	*/
	
	function __contruct(){
		
	}
	
	public function __getPass(){
		return "{$this->pass}";
	}
	
	public function __getnomUsuario(){
		return $this->nomUsuario;
	}
	
	public function __getTipoUsuario(){
		return "{$this->tipoUsuario}";
	}
	
	public function __setPass($pass){
		$this->pass = $pass;
	}
	
	public function __setnomUsuario($nomUsuario){
		$this->nomUsuario = $nomUsuario;
	}
	
	public function __setTipoUsuario($tipoUsuario){
		$this->tipoUsuario = $tipoUsuario;
	}
}
?>