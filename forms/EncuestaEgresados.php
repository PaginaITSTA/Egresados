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
	<nav>
    	<div class="nav-wrapper container">
      		<a href="#" class="brand-logo">ITSTA</a>
      		<ul id="nav-mobile" class="right hide-on-med-and-down">
        		<li><a href="sass.html">Sass</a></li>
        		<li><a href="badges.html">Components</a></li>
        		<li><a href="collapsible.html">JavaScript</a></li>
      		</ul>
    	</div>
  	</nav>
  	
<div class="container">
	<div>
		<p>En el Instituto Tecnológico Superior de Tantoyuca, estamos operando el Programa de Seguimiento de Egresados, con el cual buscamos estar informados de la trayectoria de cada uno de nuestros profesionistas, la principal finalidad es conocer sus experiencias profesionales y de desarrollo</p>
	</div>
	
	<!-- Tabla inicial o cabecera -->
	<div>
		<table width="800">
  			<tbody>
    		<tr>
      			<td colspan="2"><div class="col m6 s12">
      				<label class="active" for="nombre">Nombre:</label>
      				<input id="nombre" name="nombre" type="text">
      			</div></td>
      			
      			<td><div class="col m3 s12">
      				<label class="active" for="carrera">Carrera:</label>
      				<input id="carrera" name="carrera" type="text">
      			</div></td>
      			<td><div class="col m3 s12">
      				<label class="active" for="generacion">Generación:</label>
      				<input id="generacion" name="generacion" type="text">
      			</div></td>
    		</tr>
    		<tr>
      			<td colspan="2"><div class="col m6 s12">
      				<label class="active" for="empAct">Empleo actual:</label>
      				<input id="empAct" name="empAct" type="text">
      			</div></td>
      			
      			<td colspan="2"><div class="col m6 s12">
      				<label class="active" for="giroEmp">Giro de la empresa:</label>
      				<input id="giroEmp" name="giroEmp" type="text">
      			</div></td>
    		</tr>
  			</tbody>
		</table>
	</div>
	
	<!-- a couple of lines  -->
	<br><br>
	
	
	<!-- Tabla infraestructura y equipamiento -->
	<di>
		<table>
		<p>Infraestructura y equipamiento.</p>
			<thead>
			<tr>
				<th>No.</th>
				<th>Pregunta</th>
				<th>Respuesta.</th>
			</tr>
			</thead>
			<tbody class="bordered">
				
				<tr>
					<td>1</td>
					<td><p>¿El equipamiento de los laboratorios y talleres te parecieron?</p></td>
					<td><input name="" id="" type="text"></td>
				</tr>
				<tr>
					<td>2</td>
					<td><p>¿Los servicios prestados (servicio médico, curso de inducción)?</p></td>
					<td><input id="" name="" type="text"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><p>¿Sabes que en el ITSTA tenemos un proyecto de bolsa de trabajo y cuál es la opinion acerca del servicio que ofrece?</p></td>
					<td><input id="" name="" type="text"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><p>En base a esto: ¿Como calificas los servicios básicos que el ITSTA ofrece?</p></td>
					<td><input id="" name="" type="text"></td>
				</tr>
			</tbody>
		</table>
	</di>
	
</div>
</body>
</html>