<?php
	// define una cadena de caracteres
	$cadena = 'policia,sastre,soldado,esp�a';

	// convierte una cadena en matriz
	// datos de salida: ('policia','sastre','soldado','esp�a')
	$matriz = explode(',',$cadena);
	print_r($matriz);
?>