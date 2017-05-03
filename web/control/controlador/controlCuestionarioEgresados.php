<?php
$arrayCuestionario = $_POST['cuestionarioEgresados'];

require "../../src/mx/edu/itsta/DTO/cuestionarioEgresadosDTO.php";

$ClaseCuestionario = new cuestionarioEgresados();

$ClaseCuestionario->__setSE_noControl($arrayCuestionario[0]);
$ClaseCuestionario->__setSE_carrera($arrayCuestionario[1]);
$ClaseCuestionario->__setSE_nombre($arrayCuestionario[2]);
$ClaseCuestionario->__setSE_direccion($arrayCuestionario[3]);
$ClaseCuestionario->__setSE_telefono($arrayCuestionario[4]);


$ClaseCuestionario->__setSE_telMovil($arrayCuestionario[5]);
$ClaseCuestionario->__setSE_email($arrayCuestionario[6]);
$ClaseCuestionario->__setSE_pEgreso($arrayCuestionario[7]);
$ClaseCuestionario->__setSE_generacion($arrayCuestionario[8]);
$ClaseCuestionario->__setSE_estudia($arrayCuestionario[9]);

if($arrayCuestionario[9] === "No"){
	$ClaseCuestionario->__setSE_estudioActual("");
}else{
	$ClaseCuestionario->__setSE_estudioActual($arrayCuestionario[10]);
}

$ClaseCuestionario->__setSE_empresaTrabajo($arrayCuestionario[11]);
$ClaseCuestionario->__setSE_trabajoEspecialidad($arrayCuestionario[12]);
$ClaseCuestionario->__setSE_sectorTrabajo($arrayCuestionario[13]);


if($arrayCuestionario[14] === "Otro"){
	$ClaseCuestionario->__setSE_puestoTrabajo($arrayCuestionario[15]);
}else{
	$ClaseCuestionario->__setSE_puestoTrabajo($arrayCuestionario[14]);
}


$ClaseCuestionario->__setSE_tamanoEmpresa($arrayCuestionario[15]);

//Requerimos un nuevo archivo para hacer el enlace
require "../../src/mx/edu/itsta/Controlador/Controlador.php";
//Creamos el controlador
$claseControlador = new Controlador();

$claseControlador->cuestionarioEgresados($ClaseCuestionario);

//Pruebas de obtención de información a partir de la clase.
//echo "Hemos ingresado el valor: ".$arrayCuestionario[0]." en la clase";
//echo "Obteniendo el numero es: ".$ClaseCuestionario->__getSE_noControl();



/*
----------------------------------------------------------
Solo para comproabr los valores del arreglo

$val = 1;
$true = 0;
foreach ($_POST['cuestionarioEgresados'] as $key => $value){
	//echo "posicion: ".$val." es -> ".$value."<br />";
	
	
	if($val == 10 && $value == "No"){
		echo("Entro en No de la pregunta, ¿estudia?, por lo tanto no va a mostrar el 11");
		echo("<br>");
		$true = 1;
	}
	
	if($val == 15 && $value == "Otro"){
		$true = 1;
	}
	
	if($val == 15 && $value != "Otro"){
		echo "posicion: ".$val." es -> ".$value."<br />";
		$true = 2;
	}
	
	if($true == 1 && $val == 16 ){
		$true = 0;
	}
	
	if($true == 2 && $val == 17){
		$true = 0;
	}
	
	if($true == 0){
		echo "posicion: ".$val." es -> ".$value."<br />";
	}
	
	
	if($true == 1 && $val == 11 ){
		$true = 0;
	}
	
	
	
	$val ++;
}
*/
?>