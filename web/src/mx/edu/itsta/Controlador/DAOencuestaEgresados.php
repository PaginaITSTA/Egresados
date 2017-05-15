<?php
header("Content-Type: text/html;charset=utf-8");
class DAOEncuestaEgresados{
	
	function __construct(){
		//Declaraciones del constructor
	}
	
	public function guardarValores($claseEnEgre){
		$nombre = $claseEnEgre->__getSE_nombre();
		$carrera = $claseEnEgre->__getSE_carrera();
		$generacion = $claseEnEgre->__getSE_generacion();
		$empleo = $claseEnEgre->__getSE_empleoActual();
		$giroEmpresa = $claseEnEgre->__getSE_giroEmpresa();
		
		
		$pregunta1 = $claseEnEgre->__getpregunta1();
		$pregunta2 = $claseEnEgre->__getpregunta2();
		$pregunta3 = $claseEnEgre->__getpregunta3();
		$pregunta4 = $claseEnEgre->__getpregunta4();
		$pregunta5 = $claseEnEgre->__getpregunta5();
		$pregunta6 = $claseEnEgre->__getpregunta6();
		$pregunta7 = $claseEnEgre->__getpregunta7();
		$pregunta8 = $claseEnEgre->__getpregunta8();
		$pregunta9 = $claseEnEgre->__getpregunta9();
		$pregunta10 = $claseEnEgre->__getpregunta10();
		$pregunta11 = $claseEnEgre->__getpregunta11();
		$pregunta12 = $claseEnEgre->__getpregunta12();
		$pregunta13 = $claseEnEgre->__getpregunta13();
		$pregunta14 = $claseEnEgre->__getpregunta14();
		

		//Start transaction
		mysql_query("START TRANSACTION");
		
		$result = mysql_query("SELECT MAX(idRespuestas) id FROM seguimientoegresados.respuestasencuesta;");
		$id = mysql_result($result, 0, 'id');
		$id = $id +1;
		
		$a = mysql_query("INSERT INTO `seguimientoegresados`.`respuestasencuesta` 
		(`idRespuestas`,`iddatosAlumnos`, `resUno`, `resDos`, `resTres`, `resCuatro`, `resCinco`, `resSeis`, `resSiete`, `resOcho`, `resNueve`, `resDiez`, `resOnce`, `resDoce`, `resTrece`, `resCatorce`) VALUES 
		('$id','3', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5', '$pregunta6', '$pregunta7', '$pregunta8', '$pregunta9', '$pregunta10', '$pregunta11', '$pregunta12', '$pregunta13', '$pregunta14');");
		
		
		if($a){
			mysql_query("COMMIT;");
		}else{
			mysql_query("ROLLBACK;");
		}
		
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