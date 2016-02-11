<?php
session_start();
 include_once('EstudianteCollector.php');
 //include_once('Estudiante.php');

 $id_estudiante = $_POST['txtid_estudiante'];
 $nombre = $_POST['txtnombre'];
 $apellido = $_POST['txtapellido'];
 $edad = $_POST['txtedad'];
 $cedula = $_POST['txtcedula'];
 $genero = $_POST['txtgenero'];
 $email = $_POST['txtemail'];

//echo  $cargo;		

 $EstudianteCollectorObj = new EstudianteCollector();
 $EstudianteCollectorObj->updateEstudiante($id_estudiante,$nombre,$apellido,$edad,$cedula,$genero,$email);

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
   <h3>Actualizacion Exitosamente</h3>
   </head>
<body>
  
      <form action="Estudiante_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>