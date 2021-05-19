<!DOCTYPE html>
<html>
<head>
	<title>Frontend</title>
</head>
<body>
	<form action="index.php" method="get">

		<input type="text" name="nombre"><br>
		<input type="submit" value="Enviar">	
		<input type="reset" value="Limpiar" name="boton"value="reset">	

	</form>

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