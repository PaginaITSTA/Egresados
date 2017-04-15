<?php
include('../../src/mx/edu/itsta/DAO/log.php');

$nombre = "Aracely";

echo(login($nombre));

/*
if((call_user_func('login')) ==){
	header('location: ../dashboard.php');
	die();
}else{
	header('location: ../login.php');
	die();
}
	*/
?>