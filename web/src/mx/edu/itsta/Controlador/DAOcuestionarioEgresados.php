<?php
class DAOCuestionario{
	
	function __contruct(){
		//Inicializacion del constructor
	}

	function guardaCuestionario($claseCuestionarioEgresados, $conection){
		$SE_noControl = $claseCuestionarioEgresados->__getSE_noControl();
		$SE_carrera = $claseCuestionarioEgresados->__getSE_carrera();
		$SE_nombre = $claseCuestionarioEgresados->__getSE_nombre();
		$SE_direccion = $claseCuestionarioEgresados->__getSE_direccion();
		$SE_telefono = $claseCuestionarioEgresados->__getSE_telefono();
		$SE_telMovil = $claseCuestionarioEgresados->__getSE_telMovil();
		$SE_email = $claseCuestionarioEgresados->__getSE_email();
		$SE_pEgreso = $claseCuestionarioEgresados->__getSE_pEgreso();
		$SE_generacion = $claseCuestionarioEgresados->_getSE_generacion();
		$SE_estudia = $claseCuestionarioEgresados->__getSE_estudia();
		$SE_estudioActual = $claseCuestionarioEgresados->__getSE_estudioActual();
		$SE_empresaTrabajo = $claseCuestionarioEgresados->__getSE_empresaTrabajo();
		$SE_trabajoEspecialidad = $claseCuestionarioEgresados->__getSE_trabajoEspecialidad();
		$SE_sectorTrabajo = $claseCuestionarioEgresados->__getSE_sectorTrabajo();
		$SE_puestoTrabajo = $claseCuestionarioEgresados->__getSE_puestoTrabajo();
		$SE_tamanoEmpresa = $claseCuestionarioEgresados->__getSE_tamanoEmpresa();
	
	 	//Connection
		$user = $conection;

		//Start transaction
		//$user->queryDB("START TRANSACTION");
		
		
		$a = mysql_query("INSERT INTO `seguimientoegresados`.`datosalumnos` (`SE_noControl`, `SE_carrera`, `SE_nombre`, `SE_direccion`, `SE_telefono`, `SE_telMovil`, `SE_email`, `SE_pEgreso`, `SE_generacion`, `SE_estudia`, `SE_estudioActual`, `SE_empresaTrabajo`, `SE_trabajoEspecialidad`, `SE_sectorTrabajo`, `SE_puestoTrabajo`, `SE_tamanoEmpresa`) VALUES  ('$SE_noControl', '$SE_carrera', '$SE_nombre', '$SE_direccion', '$SE_telefono', '$SE_telMovil', '$SE_email', '$SE_pEgreso', '$SE_generacion', '$SE_estudia','$SE_estudioActual' , '$SE_empresaTrabajo', '$SE_trabajoEspecialidad', '$SE_sectorTrabajo', '$SE_puestoTrabajo', '$SE_tamanoEmpresa');");
		
		//return($query);
		
		
		if($a){
			$user->queryDB("COMMIT;");
		}else{
			$user->queryDB("ROLLBACK;");
		}
		
		$user->closedb();
	
	}

	public function sectorEmpresa($conection){
		$user = $conection;

		$query = "SELECT * FROM seguimientoegresados.sectorempresa;";

		$user->queryDB($query);

		$SectorEmpresa;
		$cont = 0;
	
		while ($fila = $user->getRowsDB()) {
			$SectorEmpresa[ $cont ][0] = $fila['id_sector'];
			$SectorEmpresa[ $cont ][1] = $fila['nom_sector'];
			$cont ++;
		}
		
		$user->closedb();
	
		return($SectorEmpresa);	
	}

	public function puestoEmpresa($conection){
		$user = $conection;

		$query = "SELECT * FROM seguimientoegresados.puestoempresa;";

		$user->queryDB($query);

		$PuestoEmpresa;
		$int = 0;
	
		while ($fila = $user->getRowsDB()) {
			$PuestoEmpresa[ $int ][0] = $fila['id_puesto'];
			$PuestoEmpresa[ $int ][1] = $fila['nom_puesto'];
			$int ++;
		}
		$user->closedb();
		return($PuestoEmpresa);
	}
	
	public function organitationSize($conection){
		$user = $conection;
		$query = "select * from seguimientoegresados.sizeorganitation;";
		$user->queryDB($query);
		
		$sizeOrganitation;
		$int2 = 0;
		
		while($fila = $user->getRowsDB()){
			$sizeOrganitation[ $int2 ] [0] = $fila['id_tamano'];
			$sizeOrganitation[ $int2 ] [1] = $fila['nom_tamano'];
			$int2++;
		}
		$user->closedb();
		
		return($sizeOrganitation);
	}
	
	public function carreras($conection){
		$user = $conection;

		$query = "SELECT * FROM seguimientoegresados.carrera;";

		$user->queryDB($query);

		$PuestoEmpresa;
		$int = 0;
	
		while ($fila = $user->getRowsDB()) {
			$PuestoEmpresa[ $int ][0] = $fila['id_carrera'];
			$PuestoEmpresa[ $int ][1] = $fila['nom_carrera'];
			$int ++;
		}
		$user->closedb();
	
		return($PuestoEmpresa); 
	}
}

?>