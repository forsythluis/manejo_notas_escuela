<?php

	session_start();
    
	$Usu = $_SESSION["usuario"];
					
	if (!isset($_SESSION['usuario'])) {
		header("location:../index.php");
	}
	
	include("conexion.php");
	include("../controlador/consultas.php");

	$clave =$_GET['id'];
    
	$consulta = new consulta();
 	$filas = $consulta->eliminarAlumno($clave);	
		
?>
	




