<?php
$arrayEncuestaE = $_POST['arrayEncuesta'];
require "../../src/mx/edu/itsta/DTO/EncuestaEgresadosDTO.php";

$claseEncuesta = new EncuestaEgresados();

//Cabezera de la tabla
$claseEncuesta->__setSE_nombre($arrayEncuestaE[0]);
$claseEncuesta->__setSE_carrera($arrayEncuestaE[1]);
$claseEncuesta->__setSE_generacion($arrayEncuestaE[2]);
$claseEncuesta->__setSE_empleoActual($arrayEncuestaE[3]);
$claseEncuesta->__setSE_giroEmpresa($arrayEncuestaE[4]);


//Preguntas
$claseEncuesta->__setPregunta1($arrayEncuestaE[5]);
$claseEncuesta->__setPregunta2($arrayEncuestaE[6]);
$claseEncuesta->__setPregunta3($arrayEncuestaE[7]);
$claseEncuesta->__setPregunta4($arrayEncuestaE[8]);
$claseEncuesta->__setPregunta5($arrayEncuestaE[9]);

$claseEncuesta->__setPregunta6($arrayEncuestaE[10]);
$claseEncuesta->__setPregunta7($arrayEncuestaE[11]);
$claseEncuesta->__setPregunta8($arrayEncuestaE[12]);
$claseEncuesta->__setPregunta9($arrayEncuestaE[13]);
$claseEncuesta->__setPregunta10($arrayEncuestaE[14]);

$claseEncuesta->__setPregunta11($arrayEncuestaE[15]);
$claseEncuesta->__setPregunta12($arrayEncuestaE[16]);
$claseEncuesta->__setPregunta13($arrayEncuestaE[17]);
$claseEncuesta->__setPregunta14($arrayEncuestaE[18]);


require "../../src/mx/edu/itsta/Controlador/Controlador.php";
//Creamos el controlador
$claseControlador = new Controlador();

$claseControlador->guardaEncuestaE($claseEncuesta);

?>