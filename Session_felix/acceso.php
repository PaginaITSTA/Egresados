<?php
session_start();
$_SESSION["nombre"] = "Felix";
$_SESSION["password"] = "delia";
echo "Se han creado la variables de secion.";
echo '<a href="./verificar.php"> Verificar varibles </a>';
?>
