<?php

    
	
	//Este archivo solo se encarga de destruir la sesion del usuario
	session_start();

	session_destroy();

   

	//Una vez destruida la sesion, volvemos al inicio
	header("location:../index.php");

?>