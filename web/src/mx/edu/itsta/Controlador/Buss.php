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
?>