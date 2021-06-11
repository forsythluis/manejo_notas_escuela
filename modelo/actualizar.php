<?php


    require_once('../modelo/conectar.php');
    require_once('../modelo/consulta.php');


    $mensaje=null;
    $consulta=new consulta();
    $id = $_POST['id'];
    $cedula=$_POST['cedula'];
    $nombre = $_POST['nombre'];
    $mate = $_POST['mate'];
    $fisica = $_POST['fisica'];
    $quimica = $_POST['quimica'];
    $biologia = $_POST['biologia'];
    $castellano = $_POST['castellano'];
    $deporte = $_POST['deporte'];
    if(strlen($cedula)>0 && strlen($nombre)>0 && strlen($mate)>0 && strlen($fisica)>0 && strlen($quimica)>0 && strlen($biologia)>0 && strlen($castellano)>0 && strlen($deporte)>0){
        $mensaje = $consulta->modificarAlumno("Cedula", $cedula, $id);
        $mensaje = $consulta->modificarAlumno("Alumno", $nombre, $id);
        $mensaje = $consulta->modificarAlumno("Matematicas", $mate, $id);
        $mensaje = $consulta->modificarAlumno("Fisica", $Fisica, $id);
        $mensaje = $consulta->modificarAlumno("Quimica", $quimica, $id);
        $mensaje = $consulta->modificarAlumno("Biologia", $biologia, $id);
        $mensaje = $consulta->modificarAlumno("Castellano", $castellano, $id);
        $mensaje = $consulta->modificarAlumno("Deporte", $deporte, $id);
        
        echo '<script>
    				alert("Alumno Modificado Correctamente")
    				function redireccionar(){
      					window.location="./registro.php";
    				} 
    				setTimeout ("redireccionar()", 5000); //tiempo expresado en milisegundos
    		     </script>';

    }else{

        echo "<h2 style='text-align:center; margin:100px;'>Por Favor Rellene Todos los Campos</h2>";
    }

?>

