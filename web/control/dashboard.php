<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Panel de acciones</title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->

</head>

<body>
<nav>
	<div class="nav-wrapper #37474f blue-grey darken-3">
	
		<a href="../index.php" class="brand-logo"><img src="../img/logo1.png">Logo</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		
		<ul class="right hide-on-med-and-down">
			<li><a href="../forms/EncuestaEgresados.php">Encuesta Egresados</a></li>
			<li><a href="../forms/CuestionarioEgresados.php">Cuestionario de egresados</a></li>
			<li><a href="../index.php">Salir</a></li>
		</ul>
		
		<ul class="side-nav" id="mobile-demo">
			<li><a href="../forms/EncuestaEgresados.php">Encuesta egresados</a></li>
			<li><a href="../forms/CuestionarioEgresados.php">Cuestionario de egresados</a></li>
			<li><a href="../index.php">Salir</a></li>
		</ul>
		
	</div>
</nav>


<?php
	include('../plantillas/footer.php');
?>
<!-- area  of scripts -->
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>

<script>
	$(document).ready(function(){
		$(".button-collapse").sideNav();
	});
</script>


</body>
</html>