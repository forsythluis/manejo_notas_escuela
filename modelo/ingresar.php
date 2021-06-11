<?php

	include("./conexion.php");
	include("../controlador/consultas.php");
	

	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['email'];
	$mate = (int)$_POST['mate'];
	$fisica = (int)$_POST['fisica'];
	$quimica = (int)$_POST['quimica'];
	$biologia = (int)$_POST['biologia'];
	$castellano = (int)$_POST['castellano'];
	$deporte = (int)$_POST['deporte'];
	$Error = "Error, debe ingresar valores de nota válidos";
	$Error1 = "correcto";
	
	if(((strlen($cedula)>0) && (strlen($nombre)>0) && (strlen($correo)>0)) && (($mate < 0 or $mate > 20) or ($fisica < 0 or $fisica > 20) or ($quimica < 0 or $quimica > 20) or ($biologia < 0 or $biologia > 20) or ($castellano < 0 or $castellano > 20) or ($deporte < 0 or $deporte > 20))){

		echo '<script>
				alert("Error, no debe dejar vacio ningún campo")
				function redireccionar(){
  					window.location="./registro.php";
				} 
				setTimeout ("redireccionar()", 5000); //tiempo expresado en milisegundos
		     </script>';
		
	}else{

		$consulta = new consulta();
		$filas = $consulta->ingresarAlumno($cedula, $nombre,$correo, $mate, $fisica, $quimica, $biologia, $castellano, $deporte);
	}

?>