<?php
session_start();

if(isset($_SESSION['tipoUser'])){
?>
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
<?php
	if($_SESSION['tipoUser'] == "Alumno"){
		echo "<button id=\"valorOculto\" value=\"".$_SESSION['nombreUsuario']."\" hidden=\"\"></button>";
?>
<body>

<nav>
	<div class="nav-wrapper #37474f blue-grey darken-3">
	
		<a href="../index.php" class="brand-logo"><img src="../img/logo1.png">Logo</a>
		
		<ul class="right hide-on-med-and-down">
			<li><a href="../index.php">Inicio</a></li>
			<li><a href="controlador/CerrarSesion.php">cerrar sesion</a></li>
		</ul>
		
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="../index.php">Inicio</a></li>
			<li><a href="controlador/CerrarSesion.php">Cerrar sesion</a></li>
		</ul>
		
	</div>
</nav>

<div class="container">


<p><h1>¡Bienvenido Alumno!</h1></p>


</div>
<?php
	}else if($_SESSION['tipoUser'] == "Egresado"){
		echo "<button id=\"valorOculto\" value=\"".$_SESSION['nombreUsuario']."\" hidden=\"\"></button>";
		
?>
<ul id="encuesta1" class="dropdown-content">
  <li><a href="../forms/EncuestaEgresados.php">Encuesta Egresados</a></li>
  <li><a href="../forms/CuestionarioEgresados.php">Cuestionario de egresados</a></li>
  <li><a href="#!">three</a></li>
</ul>
<ul id="encuesta2" class="dropdown-content">
  <li><a href="../forms/EncuestaEgresados.php">Encuesta Egresados</a></li>
  <li><a href="../forms/CuestionarioEgresados.php">Cuestionario de egresados</a></li>
  <li><a href="#!">three</a></li>
</ul>

<nav>
	<div class="nav-wrapper #37474f blue-grey darken-3">
	
		<a href="../index.php" class="brand-logo"><img src="../img/logo1.png">Logo</a>
		
		<ul class="right hide-on-med-and-down">
			<li><a href="../index.php">Inicio</a></li>
			<li><a class="dropdown-button" href="#!" data-activates="encuesta1">Encuestas a llenar<i class="material-icons right">arrow_drop_down</i></a></li>
			<li><a href="controlador/CerrarSesion.php">cerrar sesion</a></li>
		</ul>
		
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="../index.php">Inicio</a></li>
			<li><a class="dropdown-button" href="#!" data-activates="encuesta2">Encuestas a llenar<i class="material-icons right">arrow_drop_down</i></a></li>
			<li><a href="controlador/CerrarSesion.php">Cerrar sesion</a></li>
		</ul>
		
	</div>
</nav>

<div class="container">


<p><h1>¡Bienvenido Egresado!</h1></p>


</div>

<?php
	}else if($_SESSION['tipoUser'] == "Encargado"){
		
		//echo "<a id=\"valorOculto\" >".$_SESSION['user']."</a>";
		echo "<button id=\"valorOculto\" value=\"".$_SESSION['nombreUsuario']."\" hidden=\"\"></button>";
		
?>
	<body>

<ul id="dropdown1" class="dropdown-content">
  <li><a onClick="verContenidoInicial()">Ver página inicial</a></li>
  <li><a onClick="verTablaEncargado()">Ver tabla de solicitudes</a></li>
  <li><a onClick="muestraTablaAlumnos()">Ver tabla alumnos</a></li>
  <li class="divider"></li>
  <li><a href="controlador/CerrarSesion.php">Cerrera sesion</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li><a onClick="verContenidoInicial()">Ver página inicial</a></li>
  <li><a onClick="verTablaEncargado()">Ver tabla de solicitudes</a></li>
  <li><a onClick="muestraTablaAlumnos()">Ver tabla alumnos</a></li>
  <li class="divider"></li>
  <li><a href="controlador/CerrarSesion.php">Cerrar sesion</a></li>
</ul>
<nav>
	<div class="nav-wrapper #37474f blue-grey darken-3">
		<a href="../index.php" class="brand-logo"><img src="../img/logo1.png">Logo</a>
		
		<ul class="right hide-on-med-and-down">
			<li><a href="../index.php">Inicio</a></li>
			<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Más opciones<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
		
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="../index.php">Inicio</a></li>
			<li><a class="dropdown-button" data-activates="dropdown2">Más opciones<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
	</div>
</nav>


<div class="container">

<br>

<div id="tablaTemporal" class="hide"></div>

</div>

<div id="contenidoInicial">
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-4">¡Bienvenido al área de encargados!</h1>
      </div>
    </div>
    <div class="parallax"><img src="../img/background2.gif" alt="Unsplashed background img 1"></div>
  </div>
</div>

<div class="container hide" id="tablaAlumnos"></div>


<?php		
	}
?>
<?php
	include('../plantillas/footer.php');
?>
<!-- area  of scripts -->
<script src="../plantillas/Encargado/verTablas.js"></script>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>

<script>
	//var Usuario = document.getElementById("valorOculto").value;
	Materialize.toast('Bienvenido ' + document.getElementById("valorOculto").value, 4000, 'rounded')
	
	$(document).ready(function(){
		$(".button-collapse").sideNav();
		$(".select").material_select();
		$(".dropdown-button").dropdown();
		$('.parallax').parallax();
	});
</script>
</body>
</html>
<?php
}else{
	header('location: ./login.php');
	die();
}
?>