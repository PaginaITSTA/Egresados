<?php
session_start();
$name = "";
$password = "";

 if (isset($_SESSION["nombre"]) && isset($_SESSION["password"])){
    $name = $_SESSION["nombre"];
    $password = $_SESSION["password"];
    //Validar si el usuario esta ingresando con los datos correctos.
    validar($name,$password);
 }else {
    echo "Error, no has iniciado una secion.";
 }

  
 function validar($name,$password){
   if ($name == "Felix" && $password == "delia"){
     echo "OK, tienes el acceso permitido : $name con contraseña $password";
     echo '</br><a href="./salir.php">Cerrar secion </a>';
  }else{
     echo "Debes de registrarte para tener acceso.";
  }  
 }
?>