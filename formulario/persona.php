<?php

 	class Persona{

	 	private  $nombre;
	 	private  $apellido;

	function  __construct($nombre,$apellido){
	
	 	$this->nombre=$nombre;
	 	$this->apellido=$apellido;
	 }

	 public function getNombre(){
	 	return $this->nombre;
	 }
	 public function getApellido(){
	 	return $this->apellido;
	 }


 	}

 	$persona=new Persona("carlos","caceres");
 	//$persona->nombre=;
 	//$persona->apellido="caceres";

 	echo $persona->getNombre();
 	echo $persona->getApellido();



?>