<?php 



class clase1{
	static $atributo = "Soy un atributo";

	 function metodo1()
	{
		echo "Soy un metodo o funcion";
	}
}

// $objeto = new clase1();

// echo $objeto->atributo;

// $objeto->metodo1();

echo clase1::$atributo . "<br>";
clase1::metodo1();


 ?>