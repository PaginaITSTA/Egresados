<?php 
	
session_start();
include 'conexionBD.php';
if (isset($_SESSION['user']) && isset($_SESSION['password'])){
	echo'<script> window.location="panel.php"; </script>';
}
	
?>
 
 <!doctype html>
<html>
<body>

	<form action="validar.php" method="POST">
	  <p>
	    <label for="textfield">Usuario:</label>
	    <input type="text" name="user" id="textfield">
      </p>
	  <p>
	    <label for="password">Password:</label>
        <input type="password" name="password" id="password">
	  </p>
	  <p>
	    <input type="submit" name="btn_iniciar" id="submit" value="Iniciar">
	  </p>
	</form>
	



</body>
</html>