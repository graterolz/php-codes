<?php
	// define variables
	$precio = 100;
	$tamano = 18;
	// prueba lógica y (AND)
	// regresa el valor de verdadero (true) si ambas comparaciones son verdaderas
	// en este caso regresa el valor de verdadero (true)
	echo ($precio > 50 && $tamano<25);
	// prueba lógica o (OR)
	// regresa el valor de verdadero (true) si cualquiera de las dos comparaciones es verdadera
	// en este caso regresa el valor de falso (false)
	echo ($precio > 150 || $tamano > 75);
	// prueba lógica no (NOT)
	// invierte la prueba lógica
	// en este caso regresa el valor de falso (false)
	echo !($tamano > 10);
?>