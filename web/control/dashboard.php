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
		echo "<button id=\"valorOculto\" value=\"".$_SESSION['user']."\" hidden=\"\"></button>";
?>
<body>

<nav>
	<div class="nav-wrapper #37474f blue-grey darken-3">
	
		<a href="../index.php" class="brand-logo"><img src="../img/logo1.png">Logo</a>
		
		<ul class="right hide-on-med-and-down">
			<li><a href="../forms/EncuestaEgresados.php">Encuesta Egresados</a></li>
			<li><a href="../forms/CuestionarioEgresados.php">Cuestionario de egresados</a></li>
			<li><a href="../index.php">Inicio</a></li>
			<li><a href="controlador/CerrarSesion.php">cerrar sesion</a></li>
		</ul>
		
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="../forms/EncuestaEgresados.php">Encuesta egresados</a></li>
			<li><a href="../forms/CuestionarioEgresados.php">Cuestionario de egresados</a></li>
			<li><a href="../index.php">Inicio</a></li>
			<li><a href="controlador/CerrarSesion.php">Cerrar sesion</a></li>
		</ul>
		
	</div>
</nav>

<div class="container">


<p><h1>¡Bienvenido Alumno!</h1></p>


</div>

<?php
	}else if($_SESSION['tipoUser'] == "Encargado"){
		
		//echo "<a id=\"valorOculto\" >".$_SESSION['user']."</a>";
		echo "<button id=\"valorOculto\" value=\"".$_SESSION['user']."\" hidden=\"\"></button>";
		
?>
	<body>

<ul id="dropdown1" class="dropdown-content">
  <li><a onClick="verContenidoInicial(), ocultarTablaEncargado()">Ver página inicial</a></li>
  <li><a onClick="verTablaEncargado(), ocultarContenidoInicial()">Ver tabla de solicitudes</a></li>
  <li><a href="#!">three</a></li>
  <li class="divider"></li>
  <li><a href="controlador/CerrarSesion.php">Cerrera sesion</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li><a onClick="verContenidoInicial() ocultarTablaEncargado()">Ver página inicial</a></li>
  <li><a onClick="verTablaEncargado() ocultarContenidoInicial()">Ver tabla de solicitudes</a></li>
  <li><a href="#!">three</a></li>
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

<?php
		include "../src/mx/edu/itsta/Controlador/Buss.php";
		$claseBuss = new Buss();
?>
<br><br>
<table id="tablaEncargado" class="highlight responsive-table hide">
<h3 id="tituloTablaEncargado" class="hide">Tabla de peticiones para ingreso al sistema.</h3>
	<thead>
		<tr>
			<th>Numero de control</th>
			<th>Nombre</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Correo</th>
			<th>Sexo</th>
			<th>Tipo de usuario</th>
			<th>Aporbar ingreso</th>
			<th>No aprobar ingreso</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
		$tablaTemporal = $claseBuss->BussVerTablaTemporal();
		
		foreach($tablaTemporal as list($a, $b, $c, $d, $e, $f, $g)){
			echo "<tr>
				<td>$a</td>
				<td>$b</td>
				<td>$c</td>
				<td>$d</td>
				<td>$e</td>
				<td>$f</td>
				<td>$g</td>
				<td>
					<p>
      					<input type=\"checkbox\" id=\"".$a."aprobado\" />
      					<label for=\"".$a."aprobado\">Aprobar</label>
    				</p>
				</td>
				<td>
					<p>
      					<input type=\"checkbox\" id=\"".$a."desAprobado\" />
      					<label for=\"".$a."desAprobado\">Desaprobar</label>
    				</p>
				</td>
			  </tr>";
		}
	?>
		
	</tbody>
</table>

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
	Materialize.toast('Bienvenido ' + document.getElementById("valorOculto").value, 4000)
	
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