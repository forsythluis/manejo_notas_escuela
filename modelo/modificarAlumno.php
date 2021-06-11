<?php

	session_start();
    
	$Usu = $_SESSION["usuario"];
					
	if (!isset($_SESSION['usuario'])) {
		header("location:../index.php");
	}
	
	include("./conexion.php");
	include("../controlador/consultas.php");

	$mensaje = null;
	$consulta = new consulta;
	$id = $_POST['id'];
	$cedula = $_POST['cedula'];
	$alumno = $_POST['nombre'];
	$email = $_POST['correo'];
	$mate = $_POST['mate'];
	$fisica = $_POST['fisica'];
	$quimica = $_POST['quimica'];
	$biologia = $_POST['biologia'];
	$castellano = $_POST['castellano'];
	$deporte = $_POST['deporte'];
	if(strlen($cedula) > 0 && strlen($alumno) > 0 && strlen($cedula) > 0 && strlen($mate) > 0 && strlen($fisica) > 0 && strlen($quimica) > 0 && strlen($biologia) > 0 && strlen($castellano) > 0 && strlen($deporte) > 0){

		$mensaje = $consulta->modificarAlumno("Cedula", $cedula, $id);
		$mensaje = $consulta->modificarAlumno("Alumno", $alumno, $id);
		$mensaje = $consulta->modificarAlumno("email", $email, $id);
		$mensaje = $consulta->modificarAlumno("Matematicas", $mate, $id);
		$mensaje = $consulta->modificarAlumno("Fisica", $fisica, $id);
		$mensaje = $consulta->modificarAlumno("Quimica", $quimica, $id);
		$mensaje = $consulta->modificarAlumno("Biologia", $biologia, $id);
		$mensaje = $consulta->modificarAlumno("Castellano", $castellano, $id);
		$mensaje = $consulta->modificarAlumno("Deportes", $deporte, $id);
		echo $mensaje;

	}else{

    	echo "<h2 style='text-align:center; margin:100px;'>Por Favor Rellene Todos los Campos</h2>";

	}

?>