<?php
/*
require('conect.php');
require('operaciones.php');
*/
class DAOLogin{
	
	public function __construct(){
		
	}
	
	function Login($claseLogin, $coneccion){
		
		
		$tipoUser = $claseLogin->__getTipoUsuario();
		$correo = $claseLogin->__getCorreo();
		$passuser = $claseLogin->__getPass();
		$numControl = $claseLogin->__getNumeroCotrol();
		
		//echo("Los valores que llegaron son: $tipoUser y tambien $nomUser y tambien $passuser");
		
		$user = $coneccion;

		$query = "SELECT SE_tipoUsuario, SE_email, SE_noControl, SE_pass FROM seguimientoegresados.datosalumnos where SE_tipoUsuario = \"".$tipoUser."\" and SE_email = \"".$correo."\" and SE_pass = \"".$passuser."\" and SE_noControl = \"".$numControl."\";";

		$user->queryDB($query);

		
		while ($fila = $user->getRowsDB()) {
			$int = strcmp($fila['SE_noControl'], $numControl);
			if($int === 0){
				$user->closedb();
				unset($user);
				return (0);
				break;
			}
		}
		$user->closedb();
		unset($user);
		
		return(1);
		
	}

}

?> 