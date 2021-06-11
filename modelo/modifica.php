<?php

	session_start();
  
	$Usu = $_SESSION["usuario"];
					
	if (!isset($_SESSION['usuario'])) {
		header("location:../index.php");
	}

	include("../templates/cabecera2.php");
	include("./conexion.php");
	include("../controlador/consultas.php");
	include("./buscaAlumno.php");
?>	

	<h1>Modificar Oferta</h1>

<?php

	selecciona();

?>	

<?php
	include("../templates/pie2.php");
?>