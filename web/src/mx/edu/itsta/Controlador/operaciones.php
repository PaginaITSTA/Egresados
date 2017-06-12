 <?php
class operationDB extends connectionDB{
	private $result;
	private $db;

	function operationDB(){
		connectionDB::connectionDB();
	}

	public function queryDB($sql){
 		$this->result = mysql_query($sql,$this->getConnection()) ;
	}

	public function getResult(){
		return $this->result;
	}

	public function getDB(){
		return $this->getDataBase();
	}
	
	public function getRowsDB(){
		if ($rowsDB = mysql_fetch_array($this->getResult(),MYSQL_ASSOC)){
			return $rowsDB;
		} else {
			return false;
		}

	}
	public function closedb(){
		$this->disconnectDataBase();
	}
}
?>