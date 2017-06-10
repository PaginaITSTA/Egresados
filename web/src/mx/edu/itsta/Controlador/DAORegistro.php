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
		
		$query = "INSERT INTO `seguimientoegresados`.`temporal` (`T_noControl`, `T_Nombre`, `T_pass`, `T_telefono`, `T_celular`, `T_correo`, `T_sexo`, `T_tipoAlumno`) VALUES ('$T_noControl', '$T_Nombre', '$T_pass', '$T_telefono', '$T_celular', '$T_correo', '$T_sexo', '$T_tipoAlumno');";
		
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
}
?>