<?php

	$Usu = $_SESSION["usuario"];
					
	if (!isset($_SESSION['usuario'])) {
		header("location:../index.php");
	}

	include("../templates/cabecera2.php");
	
	function cargar(){
		$consulta = new consulta();
		$filas = $consulta->cargarAlumnos();
		echo '<div class="container mt-5">';
		echo '<div class="container text-center"><h5>Listado de Alumnos</h5></div>';
		echo '<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Nombre Alumno</th>
				      <th scope="col">Matemáticas</th>
				      <th scope="col">Física</th>
				      <th scope="col">Química</th>
				      <th scope="col">Biologia</th>
				      <th scope="col">Castellano</th>
				      <th scope="col">Deportes</th>
				      <th scope="col"></th>
				      <th scope="col"></th>
				    </tr>
				  </thead>';
				 		
		foreach ($filas as $fila) {
			echo '<tbody>
				        <tr>';
		    echo       '<th scope="row">'.$fila['Alumno'].'</th>';
			echo       '<td>'.$fila['Matematicas'].'</td>';
			echo       '<td>'.$fila['Fisica'].'</td>';
			echo       '<td>'.$fila['Quimica'].'</td>';
			echo       '<td>'.$fila['Biologia'].'</td>';
			echo 	   '<td>'.$fila['Castellano'].'</td>';
			echo       '<td>'.$fila['Deportes'].'</td>';
			echo       "<td><a href='./modifica.php?id=".$fila['id']."'> Modificar</td>";
			echo       "<td><a href='./borrarRegistro.php?id=".$fila['id']."'> Eliminar</td>";
			echo	   '</tr>
				  </tbody>';   
		}
		echo '</table>';
		echo '</div>';			
			
	}

?>
<div class="container">
	<button class="btn btn-info mt-5"><a href="./registro.php" style="color:white;">Añadir Registros</a></button>
</div>



<?php	

	include("../templates/pie2.php");

?>
     
    </body>
  </html>


	

			


