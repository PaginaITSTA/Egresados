<?php
session_start()
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>validacion de los datos</title>
</head>

<body>

<?php
	include'conexionBD.php';
if(isset($_POST['btn_iniciar'])){
	$usuario = $_POST['user'];
	$pass = $_POST['password'];
	$conn = mysql_query("SELECT * FROM seguimientoegresados.user WHERE user='$usuario' AND password='$pass'") or die(mysql_error());
	if(mysql_num_rows($conn)>0){
		$row = mysql_fetch_array($conn);
		$_SESSION["user"] = $row['user'];
		$_SESSION["tipoUser"]='usuario1';
		echo'iniciando sesion para '.$_SESSION['user'].'<p>';
		echo'<script> window.location="panel.php"; </script>';
	}else{
		echo'<script> alert("usuario o contraseña incorrecta.");</script>)';
		echo'<script> window.location="EjemploSesion.php"; </script>';	
	}
}
	?>	
</body>
</html>