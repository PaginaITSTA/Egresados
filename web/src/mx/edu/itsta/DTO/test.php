<?php
require('login.php');
	$persona = new Login();
$resultado = $persona->__getnomUsuario();
echo "resultado es: ".$resultado;
echo "<br>";
$persona->__setnomUsuario("Otro nombre.");
$resultado = $persona->__getnomUsuario();
echo "resultado es: ".$resultado;
?>