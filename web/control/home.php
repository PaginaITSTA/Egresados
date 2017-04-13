<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Seguimiento de egresados</title>
	
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	
</head>

<body>
	
<nav>
	<div class="nav-wrapper">
	
		<a href="../index.php" class="brand-logo"><img src="../img/logo1.png"/> ITSTA</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		
		<ul class="right hide-on-med-and-down">
			<li><a href="sass.html">Sass</a></li>
			<li><a href="badges.html">Components</a></li>
			<li><a href="collapsible.html">Javascript</a></li>
			<li><a href="mobile.html">Mobile</a></li>
		</ul>
		
		<ul class="side-nav" id="mobile-demo">
			<li><a href="sass.html">Sass</a></li>
			<li><a href="badges.html">Components</a></li>
			<li><a href="collapsible.html">Javascript</a></li>
			<li><a href="mobile.html">Mobile</a></li>
		</ul>
		
	</div>
</nav>
	
	
	
	<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-4">Bienvenido al seguimiento de egresados</h1>
        <div class="row center">
          <h5 class="header col s12 light">Una forma de realizar tu seguimiento de forma más eficiente</h5>
        </div>
        <div class="row center">
          <a href="../control/login.php" id="login_button" class="btn-large waves-effect waves-light teal lighten-1">Ingresa</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="../img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>
	
	
	
	
	<!-- incluir plantilla de footer -->
	<?php
		include('../plantillas/footer.php');
	?>
	
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$('.parallax').parallax();
		});
	</script>
</body>
</html>