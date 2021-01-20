<?php
	// define una variable cadena de caracteres
	$soy = 'Sara';
	// datos de salida: 'cadena de caracteres'
	echo gettype($soy);
	// asigna un nuevo valor entero a la variable
	$soy = 99.8;
	// datos de salida: 'double'
	echo gettype($soy);
	// destruye la variable
	unset($soy);
	// datos de salida: 'NULL'
	echo gettype($soy);
?>