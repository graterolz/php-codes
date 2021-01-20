<?php
	// define la matriz
	$matriz = array('uno','dos','tres','cuatro');
	// convierte matriz en cadena de caracteres
	// datos de salida: 'uno y dos y tres y cuatro'
	$cadena = implode(' y ',$matriz);
	print_r($cadena);
?>