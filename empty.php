<?php
	// prueba si la cadena de caracteres est� vac�a
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