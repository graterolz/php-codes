<?php
	// define una matriz
	$duplicados = array('a','b','a','c','e','d','e');
	print_r($duplicados);
	echo "<br>";
	// elimina duplicados
	// salida de datos: ('a','b','c','d','e')
	$originales = array_unique($duplicados);
	print_r($originales);
?>