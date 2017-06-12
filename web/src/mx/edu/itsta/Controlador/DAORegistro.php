<?php
class RegistroDAO{
	
	function __construct(){
		// Empty construct
	}
	
	public function guardaRegistro($classRegistro, $connection){
		$T_noControl = $classRegistro->__getControl();
		$T_Nombre = $classRegistro->__getName();
		$T_pass = $classRegistro->__getPass();
		$T_telefono = $classRegistro->__getTel();
		$T_celular = $classRegistro->__getCel();
		$T_correo = $classRegistro->__getEmail();
		$T_sexo = $classRegistro->__getSex();
		$T_tipoAlumno = $classRegistro->__getUser();
		
		$user = $connection;
		$DataBase = $user->getDB();
		
		$query = "INSERT INTO ".$DataBase.".`temporal` (`T_noControl`, `T_Nombre`, `T_pass`, `T_telefono`, `T_celular`, `T_correo`, `T_sexo`, `T_tipoAlumno`) VALUES ('$T_noControl', '$T_Nombre', '$T_pass', '$T_telefono', '$T_celular', '$T_correo', '$T_sexo', '$T_tipoAlumno');";
		
		$user->queryDB("START TRANSACTION;");
		
		$user->queryDB($query);
		$a = $user->getResult();
		
		
		if($a == 1){
			$user->queryDB("COMMIT;");
			return(1);
		}else{
			$user->queryDB("ROLLBACK;");
			return(0);
		}
		
		
	}
	
	public function verTablaTemporal($connection){
		$user = $connection;
		$DataBase = $user->getDB();
		
		$query = "select * from ".$DataBase.".temporal;";
		
		$user->queryDB($query);
		
		
		$tablaTemporal;
		$contador = 0;
		
		while($fila = $user->getRowsDB()){
			$tablaTemporal[ $contador ][0] = $fila['T_noControl'];
			$tablaTemporal[ $contador ][1] = $fila['T_Nombre'];
			$tablaTemporal[ $contador ][2] = $fila['T_telefono'];
			$tablaTemporal[ $contador ][3] = $fila['T_celular'];
			$tablaTemporal[ $contador ][4] = $fila['T_correo'];
			$tablaTemporal[ $contador ][5] = $fila['T_sexo'];
			$tablaTemporal[ $contador ][6] = $fila['T_tipoAlumno'];
			
			$contador ++;
		}
		
		$user->closedb();
	
		return($tablaTemporal);	
	}
	
	public function verAlumnos($connection){
		$user = $connection;
		$DataBase = $user->getDB();
		$query = "SELECT * FROM ".$DataBase.".ver_alumnos;";
		
		$user->queryDB($query);
		
		$tablaAlumnos;
		$contador = 0;
		
		while($fila = $user->getRowsDB()){
			$tablaAlumnos[ $contador ][0] = $fila['control'];
			$tablaAlumnos[ $contador ][1] = $fila['nombre'];
			$tablaAlumnos[ $contador ][2] = $fila['carrera'];
			$tablaAlumnos[ $contador ][3] = $fila['mail'];
			$tablaAlumnos[ $contador ][4] = $fila['telefono'];
			$tablaAlumnos[ $contador ][5] = $fila['movil'];
			$tablaAlumnos[ $contador ][6] = $fila['egreso'];
			$tablaAlumnos[ $contador ][7] = $fila['sexo'];
			$tablaAlumnos[ $contador ][8] = $fila['usuario'];
			
			$contador ++;
		}
		
		$user->closedb();
	
		return($tablaAlumnos);
	}
}
?>