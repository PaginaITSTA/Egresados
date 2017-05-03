<?php



/*
require('conect.php');
require('operaciones.php');
require('../DTO/loginDTO.php');


$__getNomUser = "Erick";
$__getTipoUser = "Administrador";
$__getPassUser = "1";

$usuario = new Login();

$usuario->__setnomUsuario("Aracely");
$usuario->__setTipoUsuario("Alumno");
$usuario->__setPass("1");


$url = 'test2.php';
$post = 'data='.json_encode($usuario);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_exec($ch);
*/


/*
$user = new operationDB();
echo "el usuario ahora es: ".$usuario->__getnomUsuario();
echo "<br>";

		$query = "SELECT * FROM seguimientoegresados.loging where nomUsuario = \"".$usuario->__getnomUsuario()."\" and tipoUsuario = \"".$usuario->__getTipoUsuario()."\" and passwordUsuario = \"".$usuario->__getPass()."\";";

		$user->queryDB($query);

		
		while ($fila = $user->getRowsDB()) {
			echo "Entro al while";
			echo "<br>";
			$int = strcmp($fila['nomUsuario'], $usuario->__getnomUsuario());
			if($int === 0){
				//echo "Existe";
				//echo "<br>";
				$url = 'test2.php';
				$post = 'data='.json_encode($usuario);
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
				curl_exec($ch);
			}
	//echo $fila['nomUsuario']."\t";
	//echo $fila['tipoUsuario']."<br>";
		}
echo "No llego nada";
*/
?>