<?php
	// define una matriz
	$ciudades = array("Reino Unido" => "Londres","Estados Unidos" => "Washington","Francia" => "París","India" => "Delhi");
	// crea un objeto ArrayIterator
	$iterador = new ArrayIterator($ciudades);
	// regresa al principio de la matriz
	$iterador -> rewind();
	// hace iteraciones sobre la matriz
	// presenta cada valor
	while($iterador->valid()){
		print $iterador->current() . " es la capital de " . $iterador->key() . " . \r\n";
		$iterador->next();
	}
?>