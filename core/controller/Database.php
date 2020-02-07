<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b567b1a0273bc8";$this->pass="0f7113c5";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_b8737f4feae545c";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
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
