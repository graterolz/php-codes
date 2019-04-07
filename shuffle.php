<?php
	// define una matriz
	$arcoiris = array('violeta','índigo','azul','verde','amarillo','naranja','rojo');
	print_r($arcoiris);
	echo "<br>";
	// da orden aleatorio a la matriz
	shuffle($arcoiris);
	print_r($arcoiris);
	echo "<br>";
	// invierte los elementos de la matriz
	// datos de salida: ('rojo','naranja','amarillo','verde','azul','índigo',violeta')
	$matriz = array_reverse($arcoiris);
	print_r($arcoiris);
?>