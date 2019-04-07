<?php
	// define una matriz
	$arcoiris = array('violeta','índigp','azul','verde','amarillo','naranja','rojo');
	// extrae 3 valores centrales
	// a partir del final
	// datos de salida: ('azul','verde','amarillo')
	$matriz = array_slice($arcoiris,2,3);
	print_r($matriz);
	echo "<br>";
	// extrae 3 valores centrales
	// a partir del final
	// datos de salida: ('azul','verde','amarillo')
	$matriz = array_slice($arcoiris,-5,3);
	print_r($matriz);
?>