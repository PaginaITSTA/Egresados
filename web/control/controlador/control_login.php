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

if(($ClaseBuss->validUser($claseLogin)) == 0){
	//---------------------------------------------------
	$_SESSION["tipoUser"] = $arrLogin[0];
	$_SESSION["user"] = $arrLogin[1];
	$_SESSION['noControl'] = $arrLogin[2];
	//---------------------------------------------------
	unset($ClaseBuss);
	header('location: ../dashboard.php');
	die();
}else{
	unset($ClaseBuss);
	//Aqui para performance
	header('location: ../login.php');
	die();
}

?>