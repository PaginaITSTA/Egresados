<?php
header("Content-Type: text/html;charset=utf-8");
class DAOEncuestaEgresados{
	
	function __construct(){
		//Declaraciones del constructor
	}
	
	public function tabla($conection){
		//coneccion
		$user = $conection;
		//Busqueda
		$query = "SELECT * FROM seguimientoegresados.preguntasencuesta;";
		//proceso
		$user->queryDB($query);
		//variables
		$SectorEmpresa;
		$cont = 0;
	
		//Pasa a Arreglo
		while ($fila = $user->getRowsDB()) {
			$SectorEmpresa[ $cont ][0] = $fila['idpreguntasEncuesta'];
			$SectorEmpresa[ $cont ][1] = $fila['pregunta'];
			$cont ++;
		}
		$user->closedb();
	
		return($SectorEmpresa);	
	}
}
?>