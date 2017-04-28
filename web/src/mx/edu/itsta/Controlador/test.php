<?php
echo("Entro A LA CLASE");
require "DAOcuestionarioEgresados.php";
echo("ACCESO AL REQUIRE");
$class = new DAOCuestionario();

echo("PASO DEL OBJETO");

$arr = $class->organitationSize();

echo("ANTES DE ENTRAR AL FOREACH");

echo "<br>";
foreach($arr as list($a, $b)){
	echo "primer: ".$a.", segundo: ".$b;
	echo "<br>";
}
/*
unset($arr, $a, $b);

echo("<br>");
$arr = $class->BussSectorEmpresa();

echo("ANTES DE ENTRAR AL FOREACH");

echo "<br>";
foreach($arr as list($a, $b)){
	echo "primer: ".$a.", segundo: ".$b;
	echo "<br>";
}
*/
?>