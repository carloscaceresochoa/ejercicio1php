<?php 


/*  Cortan o Interrumpen la ejecucion de un ciclo

	Break
	Continue
*/


	$c = 0;

	while($c < 3)
	{
		$c++;
		break;
		if($c == 1)
		{
			echo "<br> Hola";
			continue;
		}
		echo "Esta linea de codigo no se va a ejecutar";
	}

 ?>