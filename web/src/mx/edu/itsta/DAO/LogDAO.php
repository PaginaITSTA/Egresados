<?php
require('../Conect/conect.php');
require('../Conect/operaciones.php');

class Log
{
	private $true = 'true';
	private $false = 'false';
	
	public function __construct(){
		
	}
	
	public function Login($variable){
	
		//return("llego a DAO");
		
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


//$clas = new Log();

//echo $clas->Login("Aracely");

//echo($resultado);
?> 