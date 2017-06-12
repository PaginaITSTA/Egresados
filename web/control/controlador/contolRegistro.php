<?php
session_start();

$arrRegistro = $_POST['cuestionarioEgresados'];

require("../../src/mx/edu/itsta/DTO/registroDTO.php");

$classReg = new registro();

$classReg->__setcontrol($arrRegistro[0]);
$classReg->__setName($arrRegistro[1]);
$classReg->__setPass($arrRegistro[2]);
$classReg->__setTel($arrRegistro[3]);
$classReg->__setCel($arrRegistro[4]);
$classReg->__setEmail($arrRegistro[5]);
$classReg->__setSex($arrRegistro[6]);
$classReg->__setUser($arrRegistro[7]);


require("../../src/mx/edu/itsta/Controlador/Buss.php");
$ClaseBuss = new Buss();

if($ClaseBuss->BussGuardaTemporal($classReg) == 1){
	header('location: ../login.php');
	die();
}else{
	unset($ClaseBuss);
	//Aqui para performance
	$_SESSION['error'] = "Error al tratar de ingresar, revisa tu número de control.";
	header('location: ../../forms/registro.php');
	die();
}


?>