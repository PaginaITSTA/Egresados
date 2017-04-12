<!doctype html>
<html>
<head>
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
	
	<!-- Tabla inicial o cabecera -->
	<div>
		<table>
  			<tbody>
    		<tr>
      			<td colspan="2"><div class="input-field row"><div class="col m12 s12">
      				<label class="active" for="nombre">Nombre:</label>
      				<input id="nombre" name="nombre" type="text">
      			</div></div></td>
      			
      			<td colspan="1"><div class="input-field row"><div class="col m12 s12">
      				<label class="active" for="carrera">Carrera:</label>
      				<input id="carrera" name="carrera" type="text">
      			</div></div></td>
      			<td><div class="input-field row"><div class="col m12 s12">
      				<label class="active" for="generacion">Generación:</label>
      				<input id="generacion" name="generacion" type="text">
      			</div></div></td>
    		</tr>
    		<tr>
      			<td colspan="2"><div class="input-field row"><div class="col m12 s12">
      				<label class="active" for="empAct">Empleo actual:</label>
      				<input id="empAct" name="empAct" type="text">
      			</div></div></td>
      			
      			<td colspan="2"><div class="input-field row"><div class="col m12 s12">
      				<label class="active" for="giroEmp">Giro de la empresa:</label>
      				<input id="giroEmp" name="giroEmp" type="text">
      			</div></div></td>
    		</tr>
  			</tbody>
		</table>
	</div>
	
	<!-- a couple of lines  -->
	<br><br>
	
	
	<!-- Tabla infraestructura y equipamiento -->
	<div>
		<table class="highlight">
		<p>Infraestructura y equipamiento.</p>
			<thead>
			<tr>
				<th>No.</th>
				<th width="400">Pregunta</th>
				<th>Respuesta.</th>
			</tr>
			</thead>
			<tbody class="bordered">
				
				<tr>
					<td>1</td>
					<td><p>¿El equipamiento de los laboratorios y talleres te parecieron?</p></td>
					<td><textarea class="materialize-textarea"></textarea></td>
				</tr>
				<tr>
					<td>2</td>
					<td><p>¿Los servicios prestados (servicio médico, curso de inducción)?</p></td>
					<td><textarea class="materialize-textarea"></textarea></td>
				</tr>
				<tr>
					<td>3</td>
					<td><p>¿Sabes que en el ITSTA tenemos un proyecto de bolsa de trabajo y cuál es la opinion acerca del servicio que ofrece?</p></td>
					<td><textarea class="materialize-textarea"></textarea></td>
				</tr>
				<tr>
					<td>4</td>
					<td><p>En base a esto: ¿Como calificas los servicios básicos que el ITSTA ofrece?</p></td>
					<td><textarea class="materialize-textarea"></textarea></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<br><br>
	
	<div class="table-of-contents">
		<table class="highlight">
		<p>Formación y conocimiento.</p>
		<thead>
			<tr>
				<td>No.</td>
				<td>Pregunta.</td>
				<td>Respuesta.</td>
			</tr>
		</thead>
			<tbody>
				<tr>
				<td>5</td>
				<td><p>¿Cómo consideras que es el nivel de conocimientos y dominio de los temas mostrados por sus profesores al momento de impartirles la cátedrá así como el dominio en el dominio en el manejo de los equipos que se encuentran en los laboratorios y talleres al momento de realizar las prácticas que su carrera requiere?</p></td>
				<td><input id="" name="" type="text"></td>
			</tr>
			<tr>
				<td>6</td>
				<td><p>¿Cómo consideras la experiencia práctica adquirida por parte suya, derivado de las visítas y prácticas en las empresas?</p></td>
				<td><input id="" name="" type="text"></td>
			</tr>
			<tr>
				<td>7</td>
				<td><p>¿Consideras que el nivel de conocimientos que tiene son suficientes para el desempeño de su trabajo?</p></td>
				<td><input id="" name="" type="text"></td>
			</tr>
			<tr>
				<td>8</td>
				<td><p>¿Consideras que con los conocimientos adquiridos en el ITSTA, te han permitido competir con otros egresados a nivel Licenciatura?</p></td>
				<td><input id="" name="" type="text"></td>
			</tr>
			<tr>
				<td>9</td>
				<td><p>En base a lo anterior, ¿Cómo calificas la aplicación de los conocimientos que adquiriste en el ITSTA, en relación con tus actividades laborales?</p></td>
				<td><input id="" name="" type="text"></td>
			</tr>
			</tbody>
		</table>
	</div>
	
	<br><br>
	
	<div class="table-of-contents">
		<table class="highlight">
		<thead>
			<tr>
				<td>No.</td>
				<td class="col m6 s12">Pregunta</td>
				<td class="col m4 s12">Respuesta</td>
			</tr>
		</thead>
			<tbody>
				<tr>
					<td><p>10</p></td>
					<td class="col m6 s6"><p>¿Qué es lo que no viste en tu carrera y que consideras que le hizo falta o te hace ahora que estás trabajando?</p></td>
					<td class="col m4 s12"><input id="" name="" type="text"></td>
				</tr>
				
				<tr>
					<td><p>11</p></td>
					<td><p>¿Qué es lo que si viste en tu carrera y que no te sirve ahora que estas trabajando?</p></td>
					<td><input id="" name="" type="text"></td>
				</tr>
				
				<tr>
					<td><p>12</p></td>
					<td><p>Consideras que la enseñanza adicional que el ITSTA ofrece (talleres, congresos, diplomados, certificaciones, entre otros), ¿es fundamental en el desempeño de sus actividades ahora que trabajas?</p></td>
					<td><input id="" name="" type="text"></td>
				</tr>
				
				<tr>
					<td><p>13</p></td>
					<td><p>¿Como calificas el servicio y atención que resiviste el personal del ITSTA durante tu formación?</p></td>
					<td><input id="" name="" type="text"></td>
				</tr>
				
				<tr>
					<td><p>14</p></td>
					<td><p>En base a lo anterior, ¿Cuál sería tu propuesta para mejorar en este sentido?</p></td>
					<td><input id="" name="" type="text"></td>
				</tr>
			</tbody>
		</table>
	</div>
	
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