<?php 

/*	Instrucciones condicionales

	if: 		Esta Sentencia ejecuta el codigo que esta dentro de ella si la condicion es verdadera.

	elseif:  Esta Sentencia se utiliza cuando hay mas de dos Sentencias y se ejecuta si la condicion es verdadera.

	else :	Esta Sentencia se ejecuta cuando las demas Instrucciones (if o elseif) no se ejecutaron osea que son falsas

*/

$vehiculo = -2;
	if ($vehiculo == 0) 
	{
		echo "El vehiculo esta encendido";
	}
	elseif($vehiculo == 1)
	{
		echo "El vehiculo esta arrancando o acelerando";
	}
	else
	{
		echo "El vehiculo esta frenando";
	}



 ?>