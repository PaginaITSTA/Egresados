<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
</head>

<body>
<nav>
	<div class="nav-wrapper #37474f blue-grey darken-3">
	
		<a href="../index.php" class="brand-logo"><img src="../img/logo1.png">ITSTA</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		
		<ul class="right hide-on-med-and-down">
			<li><a href="#">Información</a></li>
			<li><a href="../index.php">Salir</a></li>
		</ul>
		
		<ul class="side-nav" id="mobile-demo">
			<li><a href="#">Información</a></li>
			<li><a href="../index.php">Salir</a></li>
		</ul>
		
	</div>
</nav>
	
	<div class="container">
	
	<br><br>
	
	<div class="row">
		<div class="col m3 s12">
			
		</div>
		<div class="col s12 m6">
			<div class="card blue-grey darken-1">
            	<div class="card-content white-text">
              		<span class="card-title">Ingrese por favor.</span>
              		
              		<div class="input-field row">
              			<label class="active">Tipo de usuario:</label>
              			<select required>
              				<option selected>Alumno.</option>
              				<option>Encargado.</option>
              				<option>Administrador.</option>
              			</select>
              		</div>
              		
              		<div class="input-field">
              			<div class="row">
              				<label class="active">Nombre:</label>
              				<input type="text" class="center-align">
              			</div>
              		</div>
              		
              		<div class="input-field">
              			<div class="row">
              				<label class="active">Contraseña:</label>
              				<input type="password" class="center-align">
              			</div>
              		</div>
            	</div>
            	
            	<div class="card-action right-align">
              		<input type="submit" value="Ingresar">
            	</div>
			</div>
		</div>
    </div>
	</div>
	
	<?php
		include('../plantillas/footer.php');
	?>
	
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$('select').material_select();
		});
	</script>
</body>
</html>