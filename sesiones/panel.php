<?php
session_start();
include'conexionBD.php';
if(isset($_SESSION['user'])){?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<?php
echo'---Se ha iniciando sesión para: '.$_SESSION['user'].'---'.'<p>';
echo'<p>--Este es el otro attributo obtenido --> '.$_SESSION['tipoUser'].'</p>';
?>
Ejemplo de memoria de sesion<p>
	<a href="salir.php"><button> Cerrar sesión </button></a>
</body>
</html>

<?php
}
else{
	echo'<script> window.location="EjemploSesion.php"; </script>';

}
?>