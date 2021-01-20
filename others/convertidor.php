<?php
	// define tasa de cambio
	// 1.00 USD = 0.70 EUR
	define ('TASA_DE_CAMBIO',0.70);

	// define la cantidad de dolares
	$dolares = 10;

	// realiza la conversión y presenta el resultado
	$euros = $dolares * TASA_DE_CAMBIO;
	echo "$dolares USD americanos son equivalentes a: $euros EUR";
?>