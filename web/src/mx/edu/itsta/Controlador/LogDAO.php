<?php

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
		$DataBase = $user->getDB();

		$query = "SELECT * FROM ".$DataBase.".login where user = \"".$tipoUser."\" and mail = \"".$correo."\" and pass = \"".$passuser."\" and control = \"".$numControl."\";";

		$user->queryDB($query);

		
		while ($fila = $user->getRowsDB()) {
			$int = strcmp($fila['control'], $numControl);
			$nombre = $fila['nombre'];
			$arrayTemp;
			if($int === 0){
				$user->closedb();
				unset($user);
				$arrayTemp[0] = 0;
				$arrayTemp[1] = $nombre;
				return ($arrayTemp);
				break;
			}
		}
		$user->closedb();
		unset($user);
		
		return(1);
		
	}

}

?> 