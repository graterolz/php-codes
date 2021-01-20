<?php
	// define variables
	$cuenta = 7;
	$edad = 60;
	$saludo = 'Bien';
	// resta 2 y reasigna el nuevo valor a la variable
	// equivalente a $cuenta = &cuenta - 2
	// dato de salida: 5
	$cuenta-=2;
	echo "$cuenta\n";
	// divide entre 5 y reasigna el nuevo valor a la variable
	// equivalente a $edad = $edad / 5
	// dato de salida: 12;
	$edad /= 5;
	echo "$edad\n";
	// añade una nueva cadena de texto y reasigna el nuevo valor a la variable
	// equivalente a $saludo = $saludo . 'venidos'
	// dato de salida: 'Bienvenidos'
	$saludo .= 'venidos';
	echo $saludo;
?>