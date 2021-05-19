<!DOCTYPE html>
<html>
<head>
	<title>Frontend</title>
</head>
<body>

	<?php

		if(isset($_GET['nombre'])){
			$nombre=$_GET['nombre'];
			echo "hola ".$nombre;
		}
		if(isset($_GET['boton'])){
			if($_GET['boton']==="reset"){
			$nombre="";

			}
		}


	?>

</body>
</html>