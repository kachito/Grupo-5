<?php
  session_start();
  $id = $_GET['id'];

 // echo $id;
 include_once('Docente.php');
 include_once('DocenteCollector.php');
 $DocenteCollectorObj = new DocenteCollector();
 $ObjDocente = $DocenteCollectorObj->showDocenteId($id);
 //print_r($ObjDocente);
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>
  <div class="container">
	<div class="page-header">
       <h1>Docente</h1>
    </div>
   <form action ="../modelo/Docente_update.php" method ="post" class="form-horizontal">
 
       

    <div class="form-group">
        <label class="control-label col-xs-3" >Codigo:</label>
        <div class="col-xs-2">
            <input type="tel"  name="txtruc"  class="form-control" value = "<?php echo $ObjDocente->getruc(); ?>">
    
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtnombre"   class="form-control" value = "<?php echo $ObjDocente->getnombre(); ?>">
        </div>
    </div>
    
	<div class="form-group">
        <label class="control-label col-xs-3" >Apellido:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion"   class="form-control" value = "<?php echo $ObjDocente->getdireccion(); ?>">
        </div>
    </div>
    

    <div class="form-group">
        <label class="control-label col-xs-3" >Edad:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion"   class="form-control" value = "<?php echo $ObjDocente->getdireccion(); ?>">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" >Cedula:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion"   class="form-control" value = "<?php echo $ObjDocente->getdireccion(); ?>">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" >Genero:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion"   class="form-control" value = "<?php echo $ObjDocente->getdireccion(); ?>">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" >Cargo:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion"   class="form-control" value = "<?php echo $ObjDocente->getdireccion(); ?>">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" >Mail:</label>
        <div class="col-xs-9">
            <input type="text"  name="txtdireccion"   class="form-control" value = "<?php echo $ObjDocente->getdireccion(); ?>">
        </div>
    </div>
	
	
	
    
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Actualizar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
	    <input type="button" value="Regresar" OnClick="history.back()" class="btn btn-primary">		
			
        </div>
    </div>
  </form>
</div>

<!-- Js vinculados -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/responsive.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>


