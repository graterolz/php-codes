<?php
	// define una cadena de caracteres
	$cadena = 'policia,sastre,soldado,espía';

	// convierte una cadena en matriz
	// datos de salida: ('policia','sastre','soldado','espía')
	$matriz = explode(',',$cadena);
	print_r($matriz);
?>