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
	<h1>Datos personales.</h1>
	
	<form>
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class=" validate" for="noControl">No. Control:</label>
			<input id="control" name="control" type="text">
		</div>
		
		<div class="col m6 s12 input-field">
			<label for="carrera">Carrera:</label>
			<input id="carrera" name="carrera" type="text">
		</div>
	</div>
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="validate" for="nombre">Nombre:</label>
			<input id="nombre" name="nombre" type="text">
		</div>
		<div class="col m6 s12 input-field">
			<label class="validate" for="direccion">Dirección:</label>
			<input id="direccion" name="direccion" type="text">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="telefono">Teléfono:</label>
			<input id="telefono" name="telefono" type="text">
		</div>
		
		<div class="col m6 s12 input-field">
			<label class="active" for="celular">Teléfono Celular:</label>
			<input id="celular" name="celular" type="text">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="email">E-mail:</label>
			<input name="email" id="email" type="text">
		</div>
		
		<div class="col m6 s12 input-field">
			<label class="active" for="pEgreso">P-Egreso:</label>
			<input id="pEgreso" name="pEgreso" type="text">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="generacion">Generación:</label>
			<input name="generacón" id="generación" type="text">
		</div>
		
		<div class="col m6 s12 input-field">
			<label class="active validate" for="estudia">¿Estudias actualmente?</label>
			<select class="browser-default" id="estudia" name="estudia">
				<option value="Si">Si.</option>
				<option value="No">No.</option>
			</select>
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="queEstudia">¿Qué estudias?</label>
			<input name="queEstudia" id="queEstudia" type="text">
		</div>
		
		<div class="col m6 s12 input-field">
			<label for="empresa">¿En qué empresa trabajas?</label>
			<input id="empresa" name="empresa" type="text">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="queTrabaja">¿Trabaja dentro de su especialidad?</label>
			<select class="browser-default" id="queTrabaja" name="queTrabaja">
				<option value="Si">Si.</option>
				<option value="No">No.</option>
			</select>
		</div>
		
		<div class="col m6 s12 input-field">
			<label class="active" for="sector">¿Sector?</label>
			<select class="browser-default" id="sector" name="sector">
				<option value="Publico">Publico.</option>
				<option value="Privado">Privado.</option>
			</select>
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="puesto">¿Qué puesto ocupa?</label>
			<select class="browser-default" id="puesto" name="puesto">
				<option value="Operativo">Operativo.</option>
				<option value="Tecnico">Técnico.</option>
				<option value="Puesto administrativo">Puesto administrativo.</option>
				<option value="Supervisor">Supervisor.</option>
				<option value="Directiovo">Directivo.</option>
				<option value="Propietario">Propietario.</option>
				<option value="Otro">Otro.</option>
			</select>
		</div>
		
		<div class="col m6 s12 input-field">
			<label class="active" for="otro">Otro.</label>
			<input id="otro" name="otro" type="text">
		</div>
	</div>
	
	<div class="row">
		<div class="col m6 s12 input-field">
			<label class="active" for="organizacion">¿Tamaño de la organización?</label>
			<select class="browser-default" id="organizacion" name="organizacion">
				<option value="Micro">Micro.</option>
				<option value="Pequenia">Pequeña.</option>
				<option value="Mediana">Mediana.</option>
				<option value="Grande">Grande.</option>
			</select>
		</div>
	</div>
	</form>
   
    </div>
    
    <footer class="page-footer">
    	<div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
        		<div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                	<ul>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                	</ul>
              	</div>
            </div>
        </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
    </footer>
    
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>