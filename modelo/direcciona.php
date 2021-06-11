<?php

	session_start();
    
	$Usu = $_SESSION["usuario"];
					
	if (!isset($_SESSION['usuario'])) {
		header("location:../index.php");
	}

	include("./conexion.php");
	include("../controlador/consultas.php");
	include("./cargar.php");
	
	cargar();

	echo "<div style='margin:20px 0 20px 750px;'>";
	echo "<nav aria-label='Page navigation example'>
		  <ul class='pagination'>";
		  
		  for ($i=1; $i <= $total_pag; $i++) { 

		  	 echo "<li class='page-item'><a class='page-link' href='direcciona.php?pagina=".$i."'>".$i."</a></li>";
		  	
		  }
	echo "</ul>";
	echo "</nav>";
	echo "</div>";	

	






	
?>