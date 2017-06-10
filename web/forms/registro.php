<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Peticion de ingreso al sistema</title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->

</head>

<body>
<?php
	include('../plantillas/navbar.php');
?>

<div class="container">
<h1 align="center">¡Bienvenido!</h1>
<br>
<p class="flow-text">
	Para poder acceder al sistema te pedimos que primero llenes algunos datos que se te van a pedir a continuación, con los cuales después de la aprobaión del encargo podrás acceder al sistema y realizar las actividades necesarias, por lo tanto, ¡bienvenido!, alumno o egresado.
</p>
<br>
<br>	
	<form action="../control/controlador/contolRegistro.php" method="post">
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="validate" for="noControl">Número de control:</label>
			<input id="noControl" size="8" name="cuestionarioEgresados[]" required type="text">
		</div>
		<div class="col m6 s12 input-field">
			<label class="validate" for="nombre">Nombre completo:</label>
			<input id="Nombre" size="50" name="cuestionarioEgresados[]" type="text" required>
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field" onKeyUp="guarda">
			<label class="validate" for="pass">Contraseña:</label>
			<input id="pass" size="10" name="otro" required type="password">
		</div>
		<div class="col m6 s12 input-field" onKeyUp="guarda">
			<label class="validate" for="rePass">Repite la contraseña:</label>
			<input id="rePass" name="cuestionarioEgresados[]" type="password" size="10" required>
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="validate" for="tel">Telefono:</label>
			<input id="tel" size="12" name="cuestionarioEgresados[]" type="tel" placeholder="000-000-0000" pattern="^\d{3}-\d{3}-\d{4}$">
		</div>
		<div class="col m6 s12 input-field">
			<label class="validate" for="cel">Celular:</label>
			<input id="cel" name="cuestionarioEgresados[]" type="tel" size="12" placeholder="000-000-0000" pattern="^\d{3}-\d{3}-\d{4}$">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="validate" for="email">Correo electronico:</label>
			<input id="email" size="45" name="cuestionarioEgresados[]" type="email" placeholder="alguien@ejemplo.com">
		</div>
		<div class="col m6 s12 input-field">
			<label class="validate active" for="sexo">Sexualidad:</label>
			<select id="sexo" name="cuestionarioEgresados[]">
				<option value="Masculino">Masculino</option>
				<option value="Femenino">Femenino</option>
			</select>
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="validate active" for="sexo">Tipo de alumno:</label>
			<select id="sexo" name="cuestionarioEgresados[]">
				<option value="Alumno">Alumno</option>
				<option value="Egresado">Egresado</option>
			</select>
		</div>
	</div>
	<!-- A couple lines -->
	<br><br>
	
	<div align="right">
		<button id="btnGuarda" type="submit" class="waves-effect waves-light btn">Completa tu registro<i class="material-icons right">send</i></button>
	</div>
	</form>
</div>

<?php
	include('../plantillas/footer.php');
?>
    
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>

<script>
	$(document).ready(function(){
		$(".button-collapse").sideNav();
		$("select").material_select();
		//$("#organizacion").getPropertyValue()
	});
	
	
	function guarda(){
		var Pass = document.getElementById("pass").value;
		var Repass = document.getElementById("rePass").value;
		//var btnGuarda = document.getElementById("btnGuarda"):
			
		if(Pass == Repass){
			document.getElementById("btnGuarda").style.visibility.enable = true; 
		}else{
			document.getElementById("btnGuarda").style.visibility.disable = true; 
		}
		
	}
	
</script>

</body>
</html>