<?php
	// compara cadenas de caracteres
	$a = 'hola';
	$b = 'hola';
	$c = 'hOla';
	// datos de salida: 0
	echo strcmp($a,$b);
	// datos de salida: 1
	echo strcmp($a,$c);
?>