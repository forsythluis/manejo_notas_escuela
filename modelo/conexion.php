<?php

	class conexion{
		public function get_conexion(){
			$user = "root";
			$pass = "";
			$host = "localhost";
			$db   = "alumnos";
			$conexion = new PDO("mysql:host = $host; dbname=$db; charset=UTF8", $user, $pass);
			return $conexion; 
		}
		
	}




?>