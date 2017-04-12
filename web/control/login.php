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
	<?php
		include('../plantillas/navbar.php');
	?>
	
	<div class="container">
	<div class="row">
		<div class="col m3 s12">
			
		</div>
		<div class="col s12 m6">
			<div class="card blue-grey darken-1">
            	<div class="card-content white-text">
              		<span class="card-title">Ingrese por favor.</span>
              		<div class="row">
              			<label>Nombre:</label>
              			<input type="text">
              		</div>
              		<div class="row">
              			<label>Contraseña:</label>
              			<input type="password">
              		</div>
            	</div>
            	
            	<div class="card-action">
              		<input type="button" value="Ingresar">
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
		});
	</script>
</body>
</html>