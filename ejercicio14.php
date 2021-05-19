<?php 

/* Ciclos o bucles

	Ciclos 		Traduccion 		Proceso

	while 		mientras		Ejecuta un bloque de codigo mietras la condicion sea verdadera
	do while 	hacer mientras 	Ejecuta un bloque de codigo mietras la condicion sea verdadera
	for 		para o por		Ejecuta un codigo tantas veces como lo diga la condicion
	foreach 	por cada 		Ejecuta un bloque de codigo por cada elemento de un array

	*/
	$contador = 0;
	$condicion = false;

	do {
		if($contador == 2)
		{
			$condicion = true;
			echo "El bucle ha finalisado";
		}

		$contador++;
	} while ( $condicion != true);

 ?>