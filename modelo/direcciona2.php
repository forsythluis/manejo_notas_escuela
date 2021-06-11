<?php

	session_start();
    
	$Usu = $_SESSION["usuario"];
					
	if (!isset($_SESSION['usuario'])) {
		header("location:../index.php");
	}

	include("../templates/cabecera2.php");
	include("./conexion.php");
	include("../controlador/consultas.php");
	include("./pantallaAlumno.php");
	
	$user = $_GET['user'];
	
	cargar2($user);
		
?>