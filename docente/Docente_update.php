<?php
session_start();
 include_once('DocenteCollector.php');
 //include_once('Docente.php');

 $id_profesor = $_POST['txtid_profesor'];
 $nombre = $_POST['txtnombre'];
 $apellido = $_POST['txtapellido'];
 $edad = $_POST['txtedad'];
 $cedula = $_POST['txtcedula'];
 $genero = $_POST['txtgenero'];
 $cargo = $_POST['txtcargo'];
 $email = $_POST['txtemail'];

//echo  $cargo;		

 $DocenteCollectorObj = new DocenteCollector();
 $DocenteCollectorObj->updateDocente($id_profesor,$nombre,$apellido,$edad,$cedula,$genero,$cargo,$email);

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
  
      <form action="Docente_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>
