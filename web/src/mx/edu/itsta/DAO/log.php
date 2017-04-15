<?php
require('../Conect/conect.php');
require('../Conect/operaciones.php');

function login($variable){
	
	$user = new operationDB();

	$query = "SELECT * FROM seguimientoegresados.loging;";

	$user->queryDB($query);

	while ($fila = $user->getRowsDB()) {
		if($fila['nomUsuario'] == $variable){
			return ('true');
			break;
		}
	//echo $fila['nomUsuario']."\t";
	//echo $fila['tipoUsuario']."<br>";
	}	
}

$nombre = "Aracely";

echo(login($nombre));
//echo($resultado);
?> 