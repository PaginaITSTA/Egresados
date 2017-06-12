<?php
session_start();

if(isset($_SESSION['tipoUser'])){
	if($_SESSION['tipoUser']  == "Egresado" ){
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta charset="utf-8">

<title>Encuesta para egresados.</title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
</head>

<body>
	<?php
		require('../plantillas/navbar.php');
	?>
  	
<div class="container">
	<div>
		<p>En el Instituto Tecnológico Superior de Tantoyuca, estamos operando el Programa de Seguimiento de Egresados, con el cual buscamos estar informados de la trayectoria de cada uno de nuestros profesionistas, la principal finalidad es conocer sus experiencias profesionales y de desarrollo</p>
	</div>
	
	
	<form action="../control/controlador/controlEncuestaEgresados.php" method="post">
	<!-- Tabla inicial o cabecera -->
	<?php
	echo "<div>
		<table>
  			<tbody>
    		<tr>
      			<td colspan=\"2\">
				<div class=\"input-field row\">
				<div class=\"col m12 s12\">
      				<label class=\"active\" for=\"nombre\">Nombre:</label>
      				<input id=\"nombre\" name=\"arrayEncuesta[]\" type=\"text\">
      			</div>
				</div>
				</td>
      			
      			<td colspan=\"1\">
      				<div class=\"input-field row\">
      					<div class=\"col m12 s12\">
      						<label class=\"active\" for=\"carrera\">Carrera:</label>
      						<input id=\"carrera\" name=\"arrayEncuesta[]\" type=\"text\">
      					</div>
      				</div>
      			</td>
      			
      			<td><div class=\"input-field row\"><div class=\"col m12 s12\">
      				<label class=\"active\" for=\"generacion\">Generación:</label>
      				<input id=\"generacion\" name=\"arrayEncuesta[]\" type=\"text\">
      			</div></div></td>
    		</tr>
    		<tr>
      			<td colspan=\"2\"><div class=\"input-field row\"><div class=\"col m12 s12\">
      				<label class=\"active\" for=\"empAct\">Empleo actual:</label>
      				<input id=\"empAct\" name=\"arrayEncuesta[]\" type=\"text\">
      			</div></div></td>
      			
      			<td colspan=\"2\"><div class=\"input-field row\"><div class=\"col m12 s12\">
      				<label class=\"active\" for=\"giroEmp\">Giro de la empresa:</label>
      				<input id=\"giroEmp\" name=\"arrayEncuesta[]\" type=\"text\">
      			</div></div></td>
    		</tr>
  			</tbody>
		</table>
	</div>
	
	<!-- a couple of lines  -->
	<br><br>";
	
	
		//Objeto de clase controlador
		include "../src/mx/edu/itsta/Controlador/Controlador.php";
		$claseControlador = new Controlador();
	?>
	
	
	<!-- Tabla infraestructura y equipamiento -->
	<div>
		<table class="highlight">
		
		<!--Titulo de la tabla -->
		<h5 align="center">Infraestructura y equipamiento.</h5><br>		
			<thead>
			<tr>
				<th>No.</th>
				<th>Pregunta</th>
				<th>Respuesta.</th>
			</tr>
			</thead>
			<tbody class="bordered">
			
			<?php
				//Contador
				$int = 1;
				
				$arrayTablas = $claseControlador->getTabla1();
				
				foreach($arrayTablas as list($a, $b)){
					
					echo "<tr>
						<td>$a</td>
						<td><p align=\"justify\">$b</p></td>
						<td>
							<label class=\"active\" for=\"tabla1\" >Elije una respuesta</label>
							<select id=\"tabla1\" name=\"arrayEncuesta[]\" required>
								<option selected value=\"5\">Muy bien</option>
								<option value=\"4\">Bien</option>
								<option value=\"3\">Regular</option>
								<option value=\"2\">Mal</option>
								<option value=\"1\">Pésimo</option>
							</select>
						</td>
					</tr>";
					
					if($int === 4){
						$int++;
						break;
					}
					
					$int++;
				}
				unset($int);
			?>
				
			</tbody>
		</table>
	</div>
	
	<br><br>
	
	
	<!--Tabla Formación y conocimiento.-->
	<div class="table-of-contents">
		<table class="highlight">
		
		<!--Titulo de la tabla -->
		<h5 align="center">Formación y conocimiento.</h5><br>
		<thead>
			<tr>
				<td>No.</td>
				<td>Pregunta.</td>
				<td>Respuesta.</td>
			</tr>
		</thead>
			<tbody>
			
			<?php
				$int = 1;
				foreach($arrayTablas as list($a, $b)){
					
					if($int > 4){
						echo "<tr>";
							echo "<td>$a</td>";
							echo "<td><p>$b</p></td>
							<td>
							<label class=\"active\" for=\"organizacion\" >Elije una respuesta</label>
							<select id=\"organizacion\" name=\"arrayEncuesta[]\" required>
								<option selected value=\"5\">Muy bien</option>
								<option value=\"4\">Bien</option>
								<option value=\"3\">Regular</option>
								<option value=\"2\">Mal</option>
								<option value=\"1\">Pésimo</option>
							</select>
							</td>";
						echo "</tr>";
					}
					
					if($int === 9){
						$int++;
						break;
					}
					
					$int++;
				}
			?>
			</tbody>
		</table>
	</div>
	
	<br><br>
	<!-- Tabla Atencion y servicios -->
	<div class="table-of-contents">
		<table class="highlight">
		
		<!-- Titulo de la tabla -->
		<h5 align="center">Atención y servicios.</h5><br>
		
		<thead>
			<tr>
				<td>No.</td>
				<td>Pregunta</td>
				<td >Respuesta</td>
			</tr>
		</thead>
			<tbody>
			
			<?php
				$int = 1;
				foreach($arrayTablas as list($a, $b)){
					
					if($int > 9){
						echo "<tr>";
							echo "<td>$a</td>
							<td><p>$b</p></td>
							<td>
							<label class=\"active\" for=\"tabla3\" >Elije una respuesta</label>
							<select id=\"tabla3\" name=\"arrayEncuesta[]\" required>
								<option selected value=\"5\">Muy bien</option>
								<option value=\"4\">Bien</option>
								<option value=\"3\">Regular</option>
								<option value=\"2\">Mal</option>
								<option value=\"1\">Pésimo</option>
							</select>
							</td>
						</tr>";
					}
					$int++;
				}
			?>
			
			</tbody>
		</table>
	</div>
	<!-- A couple lines -->
	<br><br>
	
	<!-- Button to send the information -->
	<div align="right">
		<button  type="submit" class="waves-effect waves-light btn">Guardar datos<i class="material-icons right">send</i></button>
	</div>
	</form>
</div>

<?php
	include('../plantillas/footer.php');
?>

<!-- area  of scripts -->
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>

<script>
	$(document).ready(function(){
		$('.button-collapse').sideNav();
		$('select').material_select();
	});
</script>
</body>
</html>
<?php
	}else{
		header('location: ../control/login.php');
		die();
	}
} else{
	header('location: ../control/login.php');
	die();
}
?>