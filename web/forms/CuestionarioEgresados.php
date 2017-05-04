<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Cuestionario para egresados.</title>

<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
</head>

<body>
	
	<!-- adherir navbar -->
	<?php
		include('../plantillas/navbar.php');
	?>
	
	<div class="container">
	<h1>Datos personales.</h1>
	
	<form name="form1" method="post" action="../control/controlador/controlCuestionarioEgresados.php">
	
	<?php
		include "../src/mx/edu/itsta/Controlador/Controlador.php";
		$claseControlador = new Controlador();
	?>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class=" validate" for="noControl">No. Control:</label>
			<input id="control" name="cuestionarioEgresados[]" type="text" class="validate" required pattern="\d{3}[Z-A]{1}\d{4}">
		</div>
		
		<div class="col m6 s12 input-field">
			<label for="carrera">Carrera:</label>
			<input id="carrera" name="cuestionarioEgresados[]" type="text">
		</div>
	</div>
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="validate" for="nombre">Nombre:</label>
			<input id="nombre" name="cuestionarioEgresados[]" type="text">
		</div>
		<div class="col m6 s12 input-field">
			<label class="validate" for="direccion">Dirección:</label>
			<input id="direccion" name="cuestionarioEgresados[]" type="text">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="telefono">Teléfono:</label>
			<input id="telefono" name="cuestionarioEgresados[]" type="text">
		</div>
		
		<div class="col m6 s12 input-field">
			<label class="active" for="celular">Teléfono Celular:</label>
			<input id="celular" name="cuestionarioEgresados[]" type="text">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="email">E-mail:</label>
			<input name="cuestionarioEgresados[]" id="email" type="text">
		</div>
		
		<div class="col m6 s12 input-field">
			<label class="active" for="pEgreso">P-Egreso:</label>
			<input id="pEgreso" name="cuestionarioEgresados[]" type="text">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="generacion">Generación:</label>
			<input name="cuestionarioEgresados[]" id="generación" type="text">
		</div>
		
		<div class="col m6 s12 input-field" onMouseMove="noEstudia()">
			<label class="active validate" for="estudia">¿Estudias actualmente?</label>
			<select id="estudia" name="cuestionarioEgresados[]">
				<option value="Si">Si.</option>
				<option value="No">No.</option>
			</select>
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field" id="lblQueEstudia">
			<label class="active" for="queEstudia">¿Qué estudias?</label>
			<input name="cuestionarioEgresados[]" id="queEstudia" type="text">
		</div>
		
		<div class="col m6 s12 input-field">
			<label for="empresa">¿En qué empresa trabajas?</label>
			<input id="empresa" name="cuestionarioEgresados[]" type="text">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="queTrabaja">¿Trabaja dentro de su especialidad?</label>
			<select id="queTrabaja" name="cuestionarioEgresados[]">
				<option value="Si">Si.</option>
				<option value="No">No.</option>
			</select>
		</div>
		
		
		
		<div class="col m6 s12 input-field">
			<label class="active" for="sector">¿Sector?</label>
			<select id="sector" name="cuestionarioEgresados[]">
			
				<?php
				$arraySectorEmpresa = $claseControlador->sectorEmpresa();
				//crea los items
				foreach ($arraySectorEmpresa as list($a, $b)) {
					echo "<option value=\"$a\">$b</option>";
				}
				?>
				
			</select>
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field" onMouseMove="otherID()" >
			
			<label class="active" for="puesto">¿Qué puesto ocupa?</label>
			<select id="puesto" name="cuestionarioEgresados[]">
			
			<?php
			$arrayPuestoEmpresa = $claseControlador->puestoEmpresa();
				//crea los items
			foreach ($arrayPuestoEmpresa as list($c, $d)) {
				echo "<option value=\"$d\">$d</option>";
			}
			?>
			
			</select>
		</div>
		
		<div id="hide" class="col m6 s12 input-field" style="visibility: hidden">
			<label class="active" for="otro">Otro.</label>
			<input id="otro" name="cuestionarioEgresados[]" type="text">
		</div>
		
		<div class="col m6 s12 input-field" >
			<label class="active" for="organizacion" >¿Tamaño de la organización?</label>
			<select id="organizacion" name="cuestionarioEgresados[]">
			<?php
			$arraySizeOrganitation = $claseControlador->sizeOrganitation();
				//crea los items
			foreach ($arraySizeOrganitation as list($e, $f)) {
				echo "<option value=\"$e\">$f</option>";
			}
			?>
			<!--			
				<option value="Micro">Micro.</option>
				<option value="Pequenia">Pequeña.</option>
				<option value="Mediana">Mediana.</option>
				<option value="Grande">Grande.</option>
				-->
			</select>
		</div>
	</div>
	
	<!-- A couple lines -->
	<br><br>
	
	<div align="right">
		<button type="submit" class="waves-effect waves-light btn">Guardar<i class="material-icons right">send</i></button>
	</div>
	</form>
   
    </div>
    
    <br><br>
    <p id="resultado"></p>
    
    <?php
		include('../plantillas/footer.php');
	?>
    
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$('select').material_select();
			$(".button-collapse").sideNav();
			//$("#organizacion").getPropertyValue()
		});
		
		function otherID(){
			var x = document.getElementById("puesto").value;
			
			var hide = document.getElementById("hide");
			if(x == "Otro"){
				//A test to find the value of resultado
				hide.style.visibility = 'visible';
			}else{
				hide.style.visibility = 'hidden';
				document.getElementById("otro").value = '';
			}
		}
		
		function noEstudia(){
			var siNo = document.getElementById("estudia").value;
			var esconde = document.getElementById("lblQueEstudia");
			
			if(siNo == "No"){
				esconde.style.visibility = 'hidden';
				document.getElementById("queEstudia").value = '';
			}else{
				esconde.style.visibility = 'visible';
			}
		}
	</script>
</body>
</html>