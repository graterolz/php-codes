<?php
	// asignar un valor a la variable
	$carro = 'Porsche';
	// mostrar el valor de la variable
	// datos de salida: 'Antes de unset(), mi carro es un Porsche'
	echo "Antes de unset(), mi carro es un $carro\n";
	// asignar un valor nulo a la variable
	$carro = null;
	// mostrar el valor de la variable
	// esto generará un error 'undefined varibale' (variable indefinida)
	// datos de salida: 'después de unset(), mi carro es un '
	echo "Después de unset(), mi carro es un $carro";
?>