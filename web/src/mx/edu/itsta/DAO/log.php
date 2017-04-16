<?php
require('../Conect/conect.php');
require('../Conect/operaciones.php');

class Log
{
	private $true = 'true';
	private $false = 'false';
	
	public function __construct(){
		
	}
	
	public function login($variable){
	
		$user = new operationDB();

		$query = "SELECT * FROM seguimientoegresados.loging;";

		$user->queryDB($query);

		while ($fila = $user->getRowsDB()) {
			if($fila['nomUsuario'] == $variable){
				
				return ('this->true');
				break;
			}
	//echo $fila['nomUsuario']."\t";
	//echo $fila['tipoUsuario']."<br>";
		}	
	}
}
//$nombre = "Aracely";

//echo(login($nombre));
//echo($resultado);
?> 