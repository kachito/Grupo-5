<?php   

include_once('Estudiante.php');
include_once('Collector.php');

class EstudianteCollector extends conexion
{
  
  function showEstudiante() {
    $rows = self::$db->getRows("SELECT * FROM Estudiante ");        
    $arrayEstudiante= array();        
    foreach ($rows as $c){
      $aux = new Estudiante($c{'id_estudiante'},$c{'nombre'},$c{'apellido'},$c{'edad'},$c{'cedula'},$c{'genero'},$c{'email'});

      array_push($arrayEstudiante, $aux);
    }
    return $arrayEstudiante;        
  }
 
  function showEstudianteId($id) {

    $row = self::$db->getRow("SELECT * FROM Estudiante where id_estudiante = '$id'");   
    
    $Estudiante = new Estudiante($row{'id_estudiante'},$row{'nombre'},$row{'apellido'},$row{'edad'},$row{'cedula'},$row{'genero'},$row{'email'});
    return $Estudiante;        
  }

function updateEstudiante($ruc,$nombre,$direccion,$telefono1,$telefono2,$numcelular1,$numcelular2) {
  
  //echo $numcelular2;
    $update = self::$db->getRow("Update Estudiante set nombre='$nombre',direccion='$direccion',telefono1='$telefono1',telefono2='$telefono2',numcelular1='$numcelular1',numcelular2='$numcelular2' where ruc='$ruc'");             
 return 1;  
  }

  function deleteEstudiante($id) {

 $delete = self::$db->getRow("Delete from Estudiante where ruc= '$id'");   
   return 1;          
  }

  function insertEstudiante($ruc,$nombre,$direccion,$telefono1,$telefono2,$numcelular1,$numcelular2) {
    $new_row = self::$db->getRow("Insert into Estudiante (ruc,nombre,direccion,telefono1,telefono2,numcelular1,numcelular2) values ('$ruc','$nombre','$direccion','$telefono1','$telefono2','$numcelular1','$numcelular2')");
 return 1;               
  }



}
?>

