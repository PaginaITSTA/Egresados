<?php
session_start();
if(isset($_SESSION['tipoUser'])){
	header('location: ./dashboard.php');
	die();
}else{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingreso a la aplicación.</title>

<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
</head>

<body>
<nav>
	<div class="nav-wrapper #37474f blue-grey darken-3">
	
		<a href="../index.php" class="brand-logo"><img src="../img/logo1.png">ITSTA</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		
		<ul class="right hide-on-med-and-down">
			<li><a href="#Detalles">Información</a></li>
			<li><a href="../control/controlador/CerrarSesion.php">Salir</a></li>
		</ul>
		
		<ul class="side-nav" id="mobile-demo">
			<li><a href="#Detalles">Información</a></li>
			<li><a href="../control/controlador/CerrarSesion.php">Salir</a></li>
		</ul>
	</div>
</nav>

<div id="Detalles" class="modal" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 220.014px;">
          <div class="modal-content  #aed581 light-green lighten-2">
            <p><h5><B><font color="blue" face="lucida console"><center>INSTITUTO TECNOLOGICO SUPERIOR DE TANTOYUCA.</center></font><B></h5></p>
			<p><h5><center><B> INGENIERIA EN SISTEMAS COMPUTACIONALES.<B></center></h5></p></br>
			<p><h5><center><B><font color="green">Fundamentos de investigación 2.</font><B></center></h5></p></br>
			<!-- <p><h5><center><B> EQUIPO "A".<B></center></h5></p></br> -->
			
			
			<p><B><h5>Integrantes: </h5></B> </p>
			<p><B><h6><font color="#0277bd" >Aracely Santiago Fernández.</font></h6></B> </p>
			<p><B><h6><font color="#0277bd" >Erick Clair Del Angel Del Angel.</font></h6></B> </p>
			
			<p><B><h6>  </h6></B> </p>
          </div>
          <div class="modal-footer #aed581 light-green lighten-2">
            <a href="#%21" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
          </div>
</div>

	<?php
	if(isset($_SESSION['error'])){
		//$error = $_SESSION['error'];
		echo "<div class=\"container center-align #f44336 red\">".$_SESSION['error']."</div>";
	}
		
	?>
	<div class="container">
	
	<br><br>
	
	<div class="row">
		<div class="col m3 s12">
			
		</div>
		<div class="col s12 m6">
			<div class="card blue-grey darken-1">
           	<form action="controlador/control_login.php" method="post">
            	<div class="card-content white-text">
              		<span class="card-title">Ingrese por favor.</span>
              		
              		<div class="input-field row">
              			<label class="active" for="login[]">Tipo de usuario:</label>
              			<select required name="login[]">
              				<option value="Alumno" selected>Alumno</option>
              				<option value="Egresado">Egresado</option>
              				<option value="Encargado">Encargado</option>
              				<option value="Administrador">Administrador</option>
              			</select>
              		</div>
              		
              		<div class="input-field">
              			<div class="row">
              				<label class="active" for="login[]">Correo:</label>
              				<input type="email" class="center-align" name="login[]" required>
              			</div>
              		</div>
              		
              		<div class="input-field">
              			<div class="row">
              				<label class="active" for="login[]">Número de control:</label>
              				<input type="text" class="center-align" name="login[]" size="8" required>
              			</div>
              		</div>
              		
              		<div class="input-field">
              			<div class="row">
              				<label for="login[]" class="active">Contraseña:</label>
              				<input type="password" class="center-align" name="login[]" size="10" required>
              			</div>
              		</div>
            	</div>
            	
            	<div class="row">
            		<div class="col m6 s12 card-action left-align">
            			<a class="waves-effect btn" href="../forms/registro.php">¡Registrate!</a>
            		</div>
            		
            		<div class="col m6 s12 card-action right-align">
              			<input class="waves-effect waves-light btn" type="submit" value="Ingresar">
            		</div>
				</div>
            </form>
			</div>
		</div>
    </div>
	</div>
	
	
	
	<?php
		include('../plantillas/footer.php');
	?>
	
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$('select').material_select();
			$('.modal').modal();
		});
	</script>
</body>
</html>
<?php
}
?>