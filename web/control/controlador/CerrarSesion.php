<?php
 //Iniciar la secion anterior
 session_start();
 //Borrar todas las variables
 session_unset();
 //Destruir la sesion.
 session_destroy();

 echo "Se ha cerrado la secion correctamente.";

header('location: ./login.php');
die();
?>