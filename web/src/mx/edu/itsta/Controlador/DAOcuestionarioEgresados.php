<?php
require('conect.php');
require('operaciones.php');

function guardarCuestionario($claseCuestionarioEgresados){
	
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
	
}
function extraerselectpuestoOcupa(){
	return("");
}
?>