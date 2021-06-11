<?php
	
	/**
	 * 
	 */
	
	class consulta {

		public function cargaUsers($user, $clave){
			
			$filas = null;
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$conexion->exec("SET CHARACTER SET utf8");
			$sql = "SELECT count(*) total FROM usuarios WHERE Usuario = :usuario AND Clave = :clave";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(":usuario", $user);
			$statement->bindParam(":clave", $clave);
			$statement ->execute();
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			$total = $result['total'];
			
				if($total == 1){
					
					$sql = "SELECT * FROM usuarios WHERE Usuario = :usuario AND Clave = :clave";
					$statement = $conexion->prepare($sql);
					$statement->bindParam(":usuario", $user);
					$statement->bindParam(":clave", $clave);
					$statement ->execute();
					while($fila = $statement->fetch()){

						$filas[] = $fila;
					}

					return $filas;
					
				}else{


				 	echo '<script>
						 	alert("Lo siento no está registrado..");
						 	function redireccionar(){
						 		  					window.location="../index.php";
						 						} 
						 	setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
						   </script>';
				}
				 
					
			
			

		}
		
		public function cargarAlumnos()
		{
			# code...
			$filas = null;
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$conexion->exec("SET CHARACTER SET utf8");
			//-----------------paginación-----------------
			
			$num_pagina = 6;
			$n=1;
			
			if(isset($_GET['pagina'])){

				if($_GET['pagina'] == 1){

					header("location:direcciona.php");

				}else{

					$pagina = $_GET['pagina'];

				}
			}else{

				$pagina = 1;

			}

			$comienzo = ($pagina - 1) * $num_pagina;
			$sql = "SELECT * FROM secciones";
			$resultado = $conexion->prepare($sql);
			$resultado->execute(array());
			$num_filas = $resultado->rowCount();
			global $total_pag;

			$total_pag = ceil($num_filas / $num_pagina);

			
			$resultado->closeCursor();
			//---------------------------------------------------

			$sql = "SELECT * FROM secciones LIMIT $comienzo, $num_pagina";
			$statement = $conexion->prepare($sql);
			$statement ->execute();
			while($result = $statement->fetch()){
				$filas[] = $result;
			}
			
			return $filas;
			
		}

		public function registroAlumnos($nombre,$cedula,$user,$seccion,$clave,$nivel){

				$total = null;
				$modelo = new conexion();
				$conexion = $modelo->get_conexion();
				$conexion->exec("SET CHARACTER SET utf8");
				$sql = "SELECT count(*) total FROM secciones WHERE Cedula = :cedula OR email = :correo";
				$statement = $conexion->prepare($sql);
				$statement->bindParam(":cedula", $cedula);
				$statement->bindParam(":correo", $user);
				$statement ->execute();
				$result = $statement->fetch(PDO::FETCH_ASSOC);
				$total = $result['total'];
				
				//-------------------------------//

				if($total == 1){

					$total1 = null;
					$modelo = new conexion();
					$conexion = $modelo->get_conexion();
					$conexion->exec("SET CHARACTER SET utf8");
					$sql = "SELECT count(*) total FROM usuarios WHERE cedula = :cedula OR Usuario = :correo";
					$statement = $conexion->prepare($sql);
					$statement->bindParam(":cedula", $cedula);
					$statement->bindParam(":correo", $user);
					$statement ->execute();
					$result = $statement->fetch(PDO::FETCH_ASSOC);
					$total1 = $result['total'];
					
					if($total1 == 1){

						echo '<script>
								alert("La Cédula,  El Correo (o ambos) ya están Registrados ")
								function redireccionar(){
				  					window.location="../index.php";
								} 
								setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
						     </script>';


					}else{

						$conexion->exec("SET CHARACTER SET utf8");
					    
						$stmt = $conexion->prepare("INSERT INTO usuarios (Nombre, cedula, Usuario,seccion, Clave, tipo_acceso) VALUES (:nom, :cedu, :user, :seccion, :clave, :acceso)");
						
						if($stmt->execute(array(':nom'=>$nombre, ':cedu'=>$cedula, ':user'=>$user, ':seccion'=>$seccion, ':clave'=>$clave, ':acceso'=>$nivel))) {
						    
						    echo '<script>
									 alert("Correcto, Ya se ha Registrado... Gracias ")
									 function redireccionar(){
					  					window.location="../vistas/login.php";
									 } 
									 setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
							      </script>';

						}else{

							echo '<script>
										alert("Hubo un error en el registro, Diríjase a su profesor guía. Gracias.. ")
										function redireccionar(){
						  					window.location="../index.php";
										} 
										setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
								  </script>';
						}

					}


				}else{

					echo '<script>
								alert("Usted no es Estudiante")
								function redireccionar(){
				  					window.location="../index.php";
								} 
								setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
						    </script>';
				}
				
			}
			   
				


		public function ingresarAlumno($cedula, $nombre, $email, $mate, $fisica, $quimica, $biologia, $castellano, $deporte){
			
				$modelo = new conexion();
				$conexion = $modelo->get_conexion();
				$conexion->exec("SET CHARACTER SET utf8");
			    
				$stmt = $conexion->prepare("INSERT INTO secciones (Cedula, Alumno,email, Matematicas,Fisica, Quimica, Biologia, Castellano, Deportes) VALUES (:cedu, :alum, :email ,:mate, :fisi, :quimi, :biolo, :caste, :depo)");
				
				if($stmt->execute(array(':cedu'=>$cedula, ':alum'=>$nombre, ':email'=>$email ,':mate'=>$mate, ':fisi'=>$fisica, ':quimi'=>$quimica, ':biolo'=>$biologia, ':caste'=>$castellano, ':depo'=>$deporte))) {
				    
				    echo '<script>
								alert("Registro Creado Exitosamente")
								function redireccionar(){
				  					window.location="./direcciona.php";
								} 
								setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
						     </script>';
					echo "<h2 style='text-align:center; margin-top:100px;'><H5>Registro Creado Exitosamente</5></h2>";
				}
				
		}

		public function modificarAlumno($campo, $valor,$id){
			
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$conexion->exec("SET CHARACTER SET utf8");
			$sql = "UPDATE secciones SET $campo = :valor WHERE id = :id";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(":valor", $valor);
			$statement->bindParam(":id", $id);
			if(!$statement){
				 
				
			}else{

				$statement->execute();
				echo '<script>
								alert("Registro Modificado Exitosamente")
								function redireccionar(){
				  					window.location="./direcciona.php";
								} 
								setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
					 </script>';
			}
		}


		

		public function buscarAlumno($id){

			$filas = null;
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$conexion->exec("SET CHARACTER SET utf8");
			$sql = "SELECT * FROM secciones WHERE id = :id";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(":id", $id);
			$statement ->execute();
			while($result = $statement->fetch()){

				$filas[]=$result;

			}
			
			return $filas;

		}

		public function notasAlumno($email){

			$filas = null;
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$conexion->exec("SET CHARACTER SET utf8");
			$sql = "SELECT * FROM secciones WHERE email = :email";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(":email", $email);
			$statement ->execute();
			while($result = $statement->fetch()){

				$filas[]=$result;

			}
			
			return $filas;

		}

		public function pantallAlumno($user){

			$filas = null;
			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$conexion->exec("SET CHARACTER SET utf8");
			$sql = "SELECT * FROM secciones WHERE email = :email";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(":email", $user);
			$statement ->execute();
			while($result = $statement->fetch()){

				$filas[]=$result;

			}
			
			return $filas;


		}

		public function eliminarAlumno($id){

			$modelo = new conexion();
			$conexion = $modelo->get_conexion();
			$sql = "DELETE  FROM secciones WHERE id = :id";
			$statement = $conexion->prepare($sql);
			$statement->bindParam(":id", $id);
			$statement->execute();
			if(!$statement){

				 echo '<script>
								alert("Error, El Registro no se pudo Eliminar")
								function redireccionar(){
				  					window.location="./direcciona.php";
								} 
								setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
					 </script>';

            }else{

                $statement->execute();
                echo '<script>
								alert("Registro Eliminado Exitosamente")
								function redireccionar(){
				  					window.location="./direcciona.php";
								} 
								setTimeout ("redireccionar()", 500); //tiempo expresado en milisegundos
					 </script>';
            }	
		}
	}

?>