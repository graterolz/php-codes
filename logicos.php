<?php
	// define variables
	$precio = 100;
	$tamano = 18;
	// prueba l�gica y (AND)
	// regresa el valor de verdadero (true) si ambas comparaciones son verdaderas
	// en este caso regresa el valor de verdadero (true)
	echo ($precio > 50 && $tamano<25);
	// prueba l�gica o (OR)
	// regresa el valor de verdadero (true) si cualquiera de las dos comparaciones es verdadera
	// en este caso regresa el valor de falso (false)
	echo ($precio > 150 || $tamano > 75);
	// prueba l�gica no (NOT)
	// invierte la prueba l�gica
	// en este caso regresa el valor de falso (false)
	echo !($tamano > 10);
?>