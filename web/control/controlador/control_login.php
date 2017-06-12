<?php
session_start();

$arrLogin = $_POST['login'];

//Requiere una clase para volverla objeto
require("../../src/mx/edu/itsta/DTO/loginDTO.php");

//Crea el objeto de tipo Login
$claseLogin = new Login();


//envía valores a la clase predefinida
$claseLogin->__setTipoUsuario($arrLogin[0]);
$claseLogin->__setCorreo($arrLogin[1]);
$claseLogin->__setNumeroControl($arrLogin[2]);
$claseLogin->__setPass($arrLogin[3]);

require("../../src/mx/edu/itsta/Controlador/Buss.php");
$ClaseBuss = new Buss();

$arrayRespuesta = $ClaseBuss->validUser($claseLogin);
$a = $arrayRespuesta[0];
$b = $arrayRespuesta[1];
if($a === 0){
	//---------------------------------------------------
	$_SESSION["tipoUser"] = $arrLogin[0];
	$_SESSION["user"] = $arrLogin[1];
	$_SESSION['noControl'] = $arrLogin[2];
	$_SESSION['nombreUsuario'] = $b;
	//---------------------------------------------------
	unset($ClaseBuss, $a, $b, $arrayRespuesta);
	header('location: ../dashboard.php');
	die();
}else{
	unset($ClaseBuss);
	//Aqui para performance
	$_SESSION['error'] = "Error al tratar de ingresar, revisa los datos ingresados.";
	header('location: ../login.php');
	die();
}

?>