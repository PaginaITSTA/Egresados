<?php
$host = "localhost";
$usuario ="root";
$password = "erick";


$conexion = mysql_connect($host, $usuario, $password);
$selection_bd = mysql_select_db('bdsesion',$conexion);
if((!$conexion) & (!$selection_bd))
{
	die('Hubo un problema, compruebe la conexion'.mysql_error());
}
//echo 'la conexion ha sido exitosa';


?>