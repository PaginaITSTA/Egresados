<?php
//$arregloLogin = $_POST{'login'};


/*
----------------------------------------------------------
Solo para comproabr los valores del arreglo
*/
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
?>