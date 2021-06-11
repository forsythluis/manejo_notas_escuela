<?php

	include("../templates/cabecera2.php");
?>	

<div class="container">
	<div class="container2 mt-5 ">
		<div class="titulo"><h5 class="text-center">Registro de Alumnos</h5></div>
		<form  method="POST" action="./ingresar.php" class="row  justify-content-center align-items-center">
		  <div class="mb-3 form-check col-4 mt-4">
		    <label for="cedula" class="form-label">Cédula</label>
		    <input type="text" class="form-control" id="cedula" name="cedula" required>
		  </div>
		  <div class="mb-3 form-check col-4 mt-4">
		    <label for="nombre" class="form-label">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" required>
		  </div>
		  <div class="mb-3 form-check col-4 mt-4">
		    <label for="email" class="form-label">Correo</label>
		    <input type="text" class="form-control" id="email" name="email" required>
		  </div>
		  <div class="mb-3 form-check col-4 mt-4">
		    <label for="matematica" class="form-label">Matemáticas</label>
		    <input type="number" class="form-control" id="mate" name="mate" required>
		  </div>
		  <div class="mb-3 form-check col-4 ">
		    <label for="fisica" class="form-label">Física</label>
		    <input type="number" class="form-control" id="fisica" name="fisica" required>
		  </div>
		  <div class="mb-3 form-check col-4">
		    <label for="quimica" class="form-label">Química</label>
		    <input type="number" class="form-control" id="quimica" name="quimica" required>
		  </div>
		  <div class="mb-3 form-check col-4">
		    <label for="biologia" class="form-label">Biologia</label>
		    <input type="number" class="form-control" id="biologia" name="biologia" required>
		  </div>
		  <div class="mb-3 form-check col-4">
		    <label for="castellano" class="form-label">Castellano</label>
		    <input type="number" class="form-control" id="castellano" name="castellano" required>
		  </div>
		  <div class="mb-3 form-check col-4">
		    <label for="deporte" class="form-label">Deporte</label>
		    <input type="number" class="form-control" id="deporte" name="deporte" required>
		  </div>
		  <button type="submit" class="btn btn-primary  col-6 mt-4 ">Submit</button>
	</form>
		
	</div>
	
	
</div>




<?php
	include("../templates/pie2.php");

?>