<?php
$arrLogin = $_POST['login'];

//Requiere una clase para volverla objeto
require("../../src/mx/edu/itsta/DTO/loginDTO.php");

//Crea el objeto de tipo Login
$claseLogin = new Login();


//envía valores a la clase predefinida
$claseLogin->__setTipoUsuario($arrLogin[0]);
$claseLogin->__setnomUsuario($arrLogin[1]);
$claseLogin->__setPass($arrLogin[2]);

/*
require("../../src/mx/edu/itsta/Controlador/Controlador.php");
$claseControlador = new Controlador();
*/

require("../../src/mx/edu/itsta/Controlador/Buss.php");
$ClaseBuss = new Buss();

if(($ClaseBuss->validUser($claseLogin)) === 0){
	unset($claseControlador);
	//Aquí debe de ir la memoria de sesion
	header('location: ../dashboard.php');
	die();
}else{
	unset($claseControlador);
	//Aqui para performance
	header('location: ../login.php');
	die();
}

?>