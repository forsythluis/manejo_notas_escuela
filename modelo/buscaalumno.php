<?php

  $Usu = $_SESSION["usuario"];
          
  if (!isset($_SESSION['usuario'])) {
    header("location:../index.php");
  }

	function selecciona(){

		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$consulta = new consulta();
			$filas = $consulta->buscarAlumno($id);
			foreach ($filas as $fila) {
				# code...
				echo "<div class='container'>
              <div class='container2 mt-5'>
              <div class='titulo'><h5 class='text-center'>Modificación Alumnos</5></div>
              <form action='./modificarAlumno.php' method='post' class='row justify-content-center align-items-center'>
                   <div class='mb-3 form-check col-4 mt-4'>
                       <label for='cedula' class='form-label'>Cédula :</label> 
                       <input type='text' class='form-control' name='cedula' id ='cedula' value='" . $fila['Cedula'] . "' required>
                   </div>
                   <div class='mb-3 form-check col-4 mt-4'>
                       <label for='nombre' class='form-label'>Alumno :</label> 
                       <input type='text' class='form-control' name='nombre' id ='nombre' value='" . $fila['Alumno'] . "' required>
                   </div>
                   <div class='mb-3 form-check col-4 mt-4'>
                       <label for='correo' class='form-label'>Correo :</label> 
                       <input type='text' class='form-control' name='correo' id ='correo' value='" . $fila['email'] . "' required>
                   </div>
                   <div class='mb-3 form-check col-4 mt-4'>
                       <label for='Mate' class='form-label'>Matemáticas :</label> 
                       <input type='number' class='form-control' name='mate' id ='mate' value='" . $fila['Matematicas'] . "' required>
                   </div>
                   <div class='mb-3 form-check col-4 mt-4'>
                       <label for='fisica' class='form-label'>Física :</label> 
                       <input type='number' class='form-control' name='fisica' id ='fisica' value='" . $fila['Fisica'] . "' required>
                   </div>
                   <div class='mb-3 form-check col-4 mt-4'>
                       <label for='quimica' class='form-label'>Química :</label> 
                       <input type='number' class='form-control' name='quimica' id ='quimica' value='" . $fila['Quimica'] . "' required>
                   </div>
                   <div class='mb-3 form-check col-4 mt-4'>
                       <label for='biologia' class='form-label'>Biologia :</label> 
                       <input type='number' class='form-control' name='biologia' id ='biologia' value='" . $fila['Biologia'] . "' required>
                   </div>
                   <div class='mb-3 form-check col-4 mt-4'>
                       <label for='castellano' class='form-label'>Castellano :</label> 
                       <input type='number' class='form-control' name='castellano' id ='castellano' value='" . $fila['Castellano'] . "' required>
                   </div>
                     <div class='mb-3 form-check col-4 mt-4'>
                       <label for='deporte' class='form-label'>Deportes :</label> 
                       <input type='number' class='form-control' name='deporte' id ='deporte' value='" . $fila['Deportes'] . "' required>
                   </div>
                   <tr>
                       <td>&nbsp; </td> 
                       <td><input type='hidden' name='id' value='" . $fila['id'] . "'></td>
                   </tr>
                     <td><input type='submit' class='btn btn-primary col-6 mt-4' value='Modificar Oferta'></td>
                   
                   </table>
            </form>";
			}
		}
	}

?>