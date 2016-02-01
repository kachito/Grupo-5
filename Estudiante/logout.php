<?php
session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario</title>
</head>

<body>

<?php

	if (isset($_SESSION['Usuario'])){
 	session_destroy();
	echo "Se Ha cerrado sesion<br/>";
	echo "<a href='sesion.php'>Volver</a>";	
	}
	else
 	{ 
	echo "Error<br/>";
	echo "<a href='sesion.php'>Volver</a>";	
	}

?>




</body>
</html>
