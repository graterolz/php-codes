<?php
	// dar formato de n�mero decimal
	// datos de salida: 00065
	printf("%05d",65);
	echo "<br>";
	// dar formato de n�mero de punto flotante
	// datos de salida: 00239.000
	printf("%09.3f",239);
	echo "<br>";
	// dar formato de n�mero octal
	// datos de salida: 10
	printf("%4o",8);
	echo "<br>";
	// formar un n�mero
	// incorporado a una cadena de caracteres
	// datos de salida: 'Veo 8 manzanas y 26.00 naranjas'
	printf("Veo %4d manzanas y %4.2f naranjas",8,26);
?>