<?php

	require_once('../modelo/conexion.php');
	require_once('../controlador/consultas.php');

	
	$consulta=new consulta();
	$nombre = $_POST['nombre'];
	$cedula = $_POST['cedula'];
	$user = $_POST['email'];
	$seccion = $_POST['seccion'];
	$clave = $_POST['clave'];
	$nivel = $_POST['nivel'];

	if(strlen($nombre)>0 && strlen($cedula)>0 && strlen($user)>0 && strlen($seccion)>0 && strlen($clave)>0 && strlen($nivel)>0 ){

			$consulta = new consulta();
			$filas = $consulta->registroAlumnos($nombre, $cedula, $user, $seccion, $clave, $nivel);

	}else{

   		 echo '<script>
					alert("Los Campos no pueden quedar en blanco..")
					function redireccionar(){
				  		window.location="../inscribe.php";
					} 
					setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
				</script>';
}

?>