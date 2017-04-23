<?php
require('conect.php');
require('operaciones.php');

function guardarCuestionario($claseCuestionarioEgresados){
	/*
	$SE_noControl = $claseCuestionarioEgresados->__getSE_noControl();
	$SE_carrera = $claseCuestionarioEgresados->__getSE_carrera();
	$SE_nombre = $claseCuestionarioEgresados->__getSE_nombre();
	$SE_direccion = $claseCuestionarioEgresados->__getSE_direccion();
	$SE_telefono = $claseCuestionarioEgresados->__getSE_telefono();
	$SE_telMovil = $claseCuestionarioEgresados->__getSE_telMovil();
	$SE_email = $claseCuestionarioEgresados->__getSE_email();
	$SE_pEgreso = $claseCuestionarioEgresados->__getSE_pEgreso();
	$SE_generacion = $claseCuestionarioEgresados->_getSE_generacion();
	$SE_estudia = $claseCuestionarioEgresados->__getSE_estudia();
	$SE_estudioActual = $claseCuestionarioEgresados->__getSE_estudioActual();
	$SE_empresaTrabajo = $claseCuestionarioEgresados->__getSE_empresaTrabajo();
	$SE_trabajoEspecialidad = $claseCuestionarioEgresados->__getSE_trabajoEspecialidad();
	$SE_sectorTrabajo = $claseCuestionarioEgresados->__getSE_sectorTrabajo();
	$SE_puestoTrabajo = $claseCuestionarioEgresados->__getSE_puestoTrabajo();
	$SE_tamanoEmpresa = $claseCuestionarioEgresados->__getSE_tamanoEmpresa();
	
	$user = new operationDB();

	$query = "inser";
	
	$user->queryDB($query);
	*/
	
}


function sectorEmpresa(){
	$user = new operationDB();

	$query = "SELECT * FROM seguimientoegresados.sectorempresa;";

	$user->queryDB($query);

	$SectorEmpresa;
	$cont = 0;
	
	while ($fila = $user->getRowsDB()) {
		$SectorEmpresa[ $cont ][0] = $fila['id_sector'];
		$SectorEmpresa[ $cont ][1] = $fila['nom_sector'];
		$cont ++;
	}
	
	return($SectorEmpresa);	
}


function puestoEmpresa(){
	$user = new operationDB();

	$query = "SELECT * FROM seguimientoegresados.puestoempresa;";

	$user->queryDB($query);

	$PuestoEmpresa;
	$int = 0;
	
	while ($fila = $user->getRowsDB()) {
		/*
		echo("la variable PuestoEmpresa[".$int."] [0] =".$fila['id_puesto']);
		echo("<br>");
		echo("la variable PuestoEmpresa[".$int."] [1] =".$fila['nom_puesto']);
		echo("<br><br>");
		*/
		$PuestoEmpresa[ $int ][0] = $fila['id_puesto'];
		$PuestoEmpresa[ $int ][1] = $fila['nom_puesto'];
		$int ++;
		//echo $fila['nomUsuario']."\t";
		//echo $fila['tipoUsuario']."<br>";
	}
	
	return($PuestoEmpresa);
	/*
	echo("<br><br>");
	echo("<br><br>");
	
	foreach ($PuestoEmpresa as list($a, $b)) {
		echo "Numero es: $a y el valor es: $b";
		echo("<br>");
	}
	*/
	
}
?>