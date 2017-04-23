<?php

require("DAOcuestionarioEgresados.php");


//puestoEmpresa();


$array = sectorEmpresa();

foreach ($array as list($a, $b)) {
	echo "Test Numero es: $a y el valor es: $b";
	echo("<br>");
}


$array2 = puestoEmpresa();

foreach ($array2 as list($c, $d)) {
	echo "Test Numero es: $c y el valor es: $d";
	echo("<br>");
}
?>