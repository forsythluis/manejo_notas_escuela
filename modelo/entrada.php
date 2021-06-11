<?php

	 
	include("./conexion.php");
	include("../controlador/consultas.php");

	if(isset($_POST['email'])){
		
		$user = $_POST['email'];
		$clave = $_POST['clave'];
		$consulta = new consulta();
		$filas = $consulta->cargaUsers($user, $clave);
		if($filas == null){

		}else{

			foreach ($filas as $fila) {
			# code...
			 	
				if($fila['tipo_acceso'] == "administrador"){

					session_start();
				    $_SESSION["usuario"] = $fila['Nombre'];

					$Usu = $_SESSION["usuario"];
					
					if (!isset($_SESSION['usuario'])) {
					    header("location:../index.php");
					}
					
					echo '<script>
					 		alert("Bienvenido Profesor "+"'.$Usu.'");
					 		function redireccionar(){ 
					 			 window.location="./direcciona.php";
					 		} 
					 		setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
					 	 </script>';
					 	 
				}else if($fila['tipo_acceso'] == "invitado"){

					session_start();
				    $_SESSION["usuario"] = $fila['Nombre'];

					$Usu = $_SESSION["usuario"];
					
					if (!isset($_SESSION['usuario'])) {
					    header("location:../index.php");
					}
				
		            echo '<script>
		            		// user="jesusalvarado@gmail.com";
		            		var user = "'.$user.'";
					 		alert("Bienvenido Alumno " + "'.$Usu.'");
					 		function redireccionar(){ 
					 			 window.location.href="./direcciona2.php?user="+user+"";
					 		} 
					 		setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
					 	 </script>';
				}
			}
		}
		
	}else{

		echo '<script>
				alert("Todos los campos deben llenarse, Gracias..");
				function redireccionar(){
				  					window.location="./login.php";
								} 
				setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
			 </script>';

	}
	
?>