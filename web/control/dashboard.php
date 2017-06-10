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
?>
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

<div class="container">


<p><h1>¡Bienvenido Alumno!</h1></p>


</div>

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

<?php
	}else if($_SESSION['tipoUser'] == "Encargado"){
		//echo "<script> alert(\"Bienvenido encargado: \"".$_SESSION['user'].");</script>)";
?>
	<body>

<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
	<div class="nav-wrapper #37474f blue-grey darken-3">
		<a href="../index.php" class="brand-logo"><img src="../img/logo1.png">Logo</a>
		
		<ul class="right hide-on-med-and-down">
			<li><a href="../index.php">Salir</a></li>
			<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
		
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="../index.php">Salir</a></li>
			<li><a class="dropdown-button" data-activates="dropdown2">Más Acciones<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
	</div>
</nav>


<div class="container">

<?php
		include "../src/mx/edu/itsta/Controlador/Buss.php";
		$claseBuss = new Buss();
?>

<table class="highlight responsive-table">
<h3>Tabla de peticiones para ingreso al sistema.</h3>
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

<?php
	include('../plantillas/footer.php');
?>
<!-- area  of scripts -->
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>

<script>
	Materialize.toast('Bienvenido!', 4000)
	
	$(document).ready(function(){
		$(".button-collapse").sideNav();
		$(".select").material_select();
		$(".dropdown-button").dropdown();
	});
</script>
<?php		
	}
?>
</body>
</html>
<?php
}else{
	header('location: ./login.php');
	die();
}
?>