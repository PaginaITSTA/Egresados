<?php
require('conect.php');
require('operaciones.php');

class DAOLogin{
	
	function Login($claseLogin){
		
		$tipoUser = $claseLogin->__getTipoUsuario();
		$nomUser = $claseLogin->__getnomUsuario();
		$passuser = $claseLogin->__getPass();
		
		//echo("Los valores que llegaron son: $tipoUser y tambien $nomUser y tambien $passuser");
		
		
		$user = new operationDB();

		$query = "SELECT * FROM seguimientoegresados.login where nomUsuario = \"".$nomUser."\" and tipoUsuario = \"".$tipoUser."\" and passwordUsuario = \"".$passuser."\";";

		$user->queryDB($query);

		
		while ($fila = $user->getRowsDB()) {
			$int = strcmp($fila['nomUsuario'], $nomUser);
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