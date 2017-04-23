<?php
$arrLogin = $_POST['login'];

//Requiere una clase para volverla objeto
require "../../src/mx/edu/itsta/DTO/loginDTO.php";

//Crea el objeto de tipo Login
$claseLogin = new Login();


//envía valores a la clase predefinida
$claseLogin->__setTipoUsuario($arrLogin[0]);
$claseLogin->__setnomUsuario($arrLogin[1]);
$claseLogin->__setPass($arrLogin[2]);



//Solo para comprobar que se guarda de forma correcta los datos en la clase objeto.
//echo "EL nombre de usuario es: ".$claseLogin->__getnomUsuario()." que es: ".$claseLogin->__getTipoUsuario()." de la universidad y su pass es: ".$claseLogin->__getPass();

require "../../src/mx/edu/itsta/Controlador/Controlador.php";
$claseControlador = new Controlador();
//$claseControlador->validaUsuario($claseLogin);


/*
$resultado = $persona->__getnomUsuario();
echo "resultado es: ".$resultado;
echo "<br>";
$persona->__setnomUsuario("Otro nombre.");
$resultado = $persona->__getnomUsuario();
echo "resultado es: ".$resultado;
*/

//$arregloLogin = $_POST{'login'};


/*
----------------------------------------------------------
Solo para comproabr los valores del arreglo


foreach ($_POST['login'] as $key => $value){
	echo $value . "<br />";
}
----------------------------------------------------------
*/




//Para poder redirigir a el lugar que corresponda.
//echo $claseControlador->validaUsuario($claseLogin);

if(($claseControlador->validaUsuario($claseLogin)) === 0){
	
	header('location: ../dashboard.php');
	die();
}else{
	header('location: ../login.php');
	die();
}

?>