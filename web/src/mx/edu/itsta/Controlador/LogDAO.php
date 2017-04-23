<?php
require('conect.php');
require('operaciones.php');

	
	function Login($claseLogin){
		
		$tipoUser = $claseLogin->__getTipoUsuario();
		$nomUser = $claseLogin->__getnomUsuario();
		$passuser = $claseLogin->__getPass();
		
		//echo "LogDAO es ".$resultado;
		//return $resultado;
		//return("llego a DAO");
		//echo("Llego a DAO");
		$user = new operationDB();

		$query = "SELECT * FROM seguimientoegresados.login where nomUsuario = \"".$nomUser."\" and tipoUsuario = \"".$tipoUser."\" and passwordUsuario = \"".$passuser."\";";

		$user->queryDB($query);

		
		while ($fila = $user->getRowsDB()) {
			$int = strcmp($fila['nomUsuario'], $nomUser);
			if($int === 0){
				return (0);
				break;
			}
	//echo $fila['nomUsuario']."\t";
	//echo $fila['tipoUsuario']."<br>";
		}
		return(1);
		
	}


//$clas = new Log();

//echo $clas->Login("Aracely");
?> 