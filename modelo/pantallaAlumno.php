<?php

	$Usu = $_SESSION["usuario"];
					
	if (!isset($_SESSION['usuario'])) {
		header("location:../index.php");
	}

	function cargar2($user){

		if(isset($user)){
			
			$consulta = new consulta();
			$filas = $consulta->pantallAlumno($user);
			foreach ($filas as $fila) {
				# code...
				echo "<div class='container'>
			              <div class='container2 mt-5 row  justify-content-center align-items-center'>
			              	    <div class='titulo'><h5 class='text-center'>Información del Alumnos</5></div>
			              
			                    <div class='input-group input-group-sm mb-3 form-check col-4 mt-4 w-50'>
								  <span class='input-group-text' id='inputGroup-sizing-sm'>Cédula Alumno</span>
								  <input type='text' class='form-control' value='" . $fila['Cedula'] . "' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' disabled>
								</div>

			                    <div class='input-group input-group-sm mb-3 form-check col-4 mt-4 w-50'>
								  <span class='input-group-text' id='inputGroup-sizing-sm'>Alumno</span>
								  <input type='text' class='form-control' value='" . $fila['Alumno'] . "' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' disabled>
								</div>

			                    <div class='input-group input-group-sm mb-3 form-check col-4 mt-4 w-50'>
								  <span class='input-group-text' id='inputGroup-sizing-sm'>Correo</span>
								  <input type='text' class='form-control' value='" . $fila['email'] . "' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' disabled>
								</div>

			                   <div class='input-group input-group-sm mb-3 form-check col-4 mt-4 w-50'>
								  <span class='input-group-text' id='inputGroup-sizing-sm'>Matemáticas</span>
								  <input type='text' class='form-control' value='" . $fila['Matematicas'] . "' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' disabled>
								</div>

			                    <div class='input-group input-group-sm mb-3 form-check col-4 mt-4 w-50'>
								  <span class='input-group-text' id='inputGroup-sizing-sm'>Física</span>
								  <input type='text' class='form-control' value='" . $fila['Fisica'] . "' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' disabled>
								</div>

			                    <div class='input-group input-group-sm mb-3 form-check col-4 mt-4 w-50'>
								  <span class='input-group-text' id='inputGroup-sizing-sm'>Química</span>
								  <input type='text' class='form-control' value='" . $fila['Quimica'] . "' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' disabled>
								</div>

			                    <div class='input-group input-group-sm mb-3 form-check col-4 mt-4 w-50'>
								  <span class='input-group-text' id='inputGroup-sizing-sm'>Biologia</span>
								  <input type='text' class='form-control' value='" . $fila['Biologia'] . "' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' disabled>
								</div>

			                    <div class='input-group input-group-sm mb-3 form-check col-4 mt-4 w-50'>
								  <span class='input-group-text' id='inputGroup-sizing-sm'>Castellano</span>
								  <input type='text' class='form-control' value='" . $fila['Castellano'] . "' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' disabled>
								</div>

			                    <div class='input-group input-group-sm mb-3 form-check col-4 mt-4 w-50'>
								  <span class='input-group-text' id='inputGroup-sizing-sm'>Deportes</span>
								  <input type='text' class='form-control' value='" . $fila['Deportes'] . "' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' disabled>
								</div>
			              </div>
			         </div>";    
			            
			}
		}
	}

 










