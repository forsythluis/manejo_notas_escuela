<?php include("../templates/cabecera2.php") ; ?>

	<div class="container mt-3 text-sm-center"><h5>Registro Estudiantes</h5></div>
	<div class="container mt-5">
		<form method="POST" action="../modelo/incluir.php">	
		<div class=" form-control mb-3">
			<input type="hidden" name="nivel" value="invitado">
		    <label for="nombre" class="form-label" >Nombres y Apellidos</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" required>
		        
		</div>	
		<div class=" form-control mb-3">
		    <label for="cedula" class="form-label" >Cédula de Identidad</label>
		    <input type="text" class="form-control" id="cedula" name="cedula" required>
		        
		</div>
		<div class=" form-control mb-3">
		    <label for="exampleInputEmail1" class="form-label" >Correo Electrónico</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
		        
		</div>
		<div class=" form-control mb-3">
		    <label for="seccion" class="form-label">Sección</label>
		    <input type="text" class="form-control" id="seccion" name="seccion" required>
		        
		</div>	
		<div class=" form-control mb-3">
		    <label for="clave" class="form-label">Password</label>
		    <input type="password" class="form-control" id="clave" name="clave" required>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
        

<?php include("../templates/pie2.php"); ?>