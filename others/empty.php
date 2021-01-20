<?php
	// prueba si la cadena de caracteres está vacía
	// datos de salida: true
	$cadena = '';
	echo (boolean) empty($cadena);

	// datos de salida: true
	$cadena = null;
	echo (boolean) empty($cadena);

	// datos de salida: true
	$cadena = '0';
	echo (boolean) empty($cadena);

	// datos de salida: true
	unset($cadena);
	echo (boolean) empty($cadena);
?>