<?php
error_reporting(0);
class Executor {

	public static function doit($sql){
		$con = Database::getCon();
		return array($con->query($sql),$con->insert_id);
	}
}
?>