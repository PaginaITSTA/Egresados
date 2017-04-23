<?php

function validUser($claseLogin){
	//Incluye la URL a una variable 
	$path = "LogDAO.php";
	//Comprueba la URL
	//echo "path : $path";
	//Incluye el archivo en esta clase
	include $path;
	//Convierte la clase en un objeto
	//$clas = new Log();
	return Login($claseLogin);
	//return($clas->Login($claseLogin));
	
	//$resultado = $claseLogin->__getnomUsuario();
	//echo "resultado en bus es: ".$resultado;
}

function BussSectorEmpresa(){
	//echo "En la clase negocio.php obtenemos el numero de control: ".$claseCuestionarioEgresados->__getSE_noControl();
	include("DAOcuestionarioEgresados.php");
	
	return sectorEmpresa();
	
}

function BusspuestoEmpresa(){
	include("DAOcuestionarioEgresados.php");
	
	return puestoEmpresa();
}

?>