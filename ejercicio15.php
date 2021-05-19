<?php 

/* Arreglos(array) o Matriz
	1) Array indexados
	2) Array Bidimencionales
	3) Array Asociativo
*/

$arreglo = array(23, "Amarillo", "Azul");
$tam = count($arreglo);
$contador = 0;
/*while($contador < $tam)
{
	echo $arreglo[$contador] . "<br>";
	$contador++;
} */


foreach($arreglo as $CadaElemento)
{
	echo $CadaElemento. "<br>";
}


//echo $arreglo[1];

 ?>