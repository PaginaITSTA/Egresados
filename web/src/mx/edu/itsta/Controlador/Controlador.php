<?php
class Controlador{
	
	public function __contruct(){
		
	}

	
	//Resive una variable de tipo login, con todos los metodos de la clase
	public function validaUsuario($claseLogin){
		//Comprueba que llego a esta clase
		//echo("logro llegar a la clase controlador.<br>");
		
		$path = "Buss.php";
		//Comprueba la dirección de la URL
		//echo "path : $path <br>";
		//Incluye el archivo de path
		require "$path";
		
		//$cs = new Negocio();
		//Ejecuta la orden 
		return validUser($claseLogin);
		//echo validUser($claseLogin);
		//return validUser($claseLogin);
		//Comprueba que llego a esta clase
		//echo("logro llegar a la clase controlador.");
		
		
		//Comprueba que lleva los metodos de la clase
		//$resultado = $claseLogin->__getnomUsuario();
		//echo "resultado es: ".$resultado;
		
	}
	
	public function sectorEmpresa(){
		require("Buss.php");
		return BussSectorEmpresa();
	}
	
	public function puestoEmpresa(){
		require("Buss.php");
		return BusspuestoEmpresa();
	}
	
	
}
?>