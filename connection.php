<?php
class Connection {
	// protected $conn;

	// public __construct()

	public static function make(){
		try{
			echo 'Connected';
			return new PDO("mysql:host=localhost;dbname=switch",'root','');
			
		}catch (PDOException $e){
			die($e->getMessage());
		}
	}
}

?>