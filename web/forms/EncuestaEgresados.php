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
		include('../plantillas/navbar.php');
	?>
  	
<div class="container">
	<div>
		<p>En el Instituto Tecnológico Superior de Tantoyuca, estamos operando el Programa de Seguimiento de Egresados, con el cual buscamos estar informados de la trayectoria de cada uno de nuestros profesionistas, la principal finalidad es conocer sus experiencias profesionales y de desarrollo</p>
	</div>
	
	
	<form>
	<!-- Tabla inicial o cabecera -->
	<div>
		<table>
  			<tbody>
    		<tr>
      			<td colspan="2"><div class="input-field row"><div class="col m12 s12">
      				<label class="active" for="nombre">Nombre:</label>
      				<input id="nombre" name="arrayCuestionario[]" type="text">
      			</div></div></td>
      			
      			<td colspan="1">
      				<div class="input-field row">
      					<div class="col m12 s12">
      						<label class="active" for="carrera">Carrera:</label>
      						<input id="carrera" name="arrayCuestionario[]" type="text">
      					</div>
      				</div>
      			</td>
      			
      			<td><div class="input-field row"><div class="col m12 s12">
      				<label class="active" for="generacion">Generación:</label>
      				<input id="generacion" name="arrayCuestionario[]" type="text">
      			</div></div></td>
    		</tr>
    		<tr>
      			<td colspan="2"><div class="input-field row"><div class="col m12 s12">
      				<label class="active" for="empAct">Empleo actual:</label>
      				<input id="empAct" name="arrayCuestionario[]" type="text">
      			</div></div></td>
      			
      			<td colspan="2"><div class="input-field row"><div class="col m12 s12">
      				<label class="active" for="giroEmp">Giro de la empresa:</label>
      				<input id="giroEmp" name="arrayCuestionario[]" type="text">
      			</div></div></td>
    		</tr>
  			</tbody>
		</table>
	</div>
	
	<!-- a couple of lines  -->
	<br><br>
	
	<?php
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
				<th width="400">Pregunta</th>
				<th>Respuesta.</th>
			</tr>
			</thead>
			<tbody class="bordered">
			
			<?php
				//Contador
				$int = 1;
				
				$arrayTablas = $claseControlador->getTabla1();
				
				foreach($arrayTablas as list($a, $b)){
					
					echo "<tr>";
						echo "<td>$a</td>";
						echo "<td><p>$b</p></td>";
						echo "<td><textarea name=\"arrayCuestionario[]\" class=\"materialize-textarea\"></textarea></td>";
					echo "</tr>";
					
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
				<td width="400">Pregunta.</td>
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
							echo "<td><p>$b</p></td>";
							echo "<td><textarea name=\"arrayCuestionario[]\" class=\"materialize-textarea\"></textarea></td>";
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
				<td width="400">Pregunta</td>
				<td >Respuesta</td>
			</tr>
		</thead>
			<tbody>
			
			<?php
				$int = 1;
				foreach($arrayTablas as list($a, $b)){
					
					if($int > 9){
						echo "<tr>";
							echo "<td>$a</td>";
							echo "<td><p>$b</p></td>";
							echo "<td><textarea name=\"arrayCuestionario[]\" class=\"materialize-textarea\"></textarea></td>";
						echo "</tr>";
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
	});
</script>
</body>
</html>