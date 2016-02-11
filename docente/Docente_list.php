<?php
session_start();
include_once("DocenteCollector.php");
 $DocenteCollectorObj = new DocenteCollector();
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">    
</head>
<body>
<header>
    <h1>Mantenimiento Docente</h1>
</header>
<br/>
<br/>
<div class="container">
<div class="table-responsive"> 
    <table class="table table-condensed table-bordered table-hover">
        <thead>
            <tr>
                <th bgcolor="#D8D8D8">CODIGO</th>
                <th bgcolor="#D8D8D8">NOMBRE</th>
                <th bgcolor="#D8D8D8">APELLIDO</th>
                <th bgcolor="#D8D8D8">EDAD</th>
  	        <th bgcolor="#D8D8D8">CEDULA</th>
	        <th bgcolor="#D8D8D8">GENERO</th>
	        <th bgcolor="#D8D8D8">CARGO</th>
          <th bgcolor="#D8D8D8">EMAIL</th>
	        <th colspan = 3 bgcolor="#D8D8D8">ACCION</th>
           </tr>
        </thead>
<?php  

foreach ($DocenteCollectorObj->showDocente() as $c){
?>
  <tbody>
  <tr>
     <td><?php echo $c->getid_profesor() ?></td>
     <td><?php echo $c->getnombre() ?></td>
     <td><?php echo $c->getapellido() ?></td>
     <td><?php echo $c->getedad() ?></td>
     <td><?php echo $c->getcedula() ?></td>
     <td><?php echo $c->getgenero() ?></td>
     <td><?php echo $c->getcargo() ?></td>
     <td><?php echo $c->getemail() ?></td>
   
     <td><a href="../views/DocenteView.php">Nuevo</a></td>   
     <td><a href="Docente_edit.php?id=<?php echo $c->getruc() ?>">Editar</a></td>
     <td><a href="Docente_delete.php?id=<?php echo $c->getruc() ?>">Eliminar</a></td>
  </tr>
  </tbody> 
<?php  
}
?>
</table>
</div>
</div>
</body>
</html>
