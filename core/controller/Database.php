<?php
error_reporting(0);
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="root";$this->pass="coi24974";$this->host="localhost";$this->ddbb="littlebox";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
