<?php
	$fecha = 2008;
	// los a�os bisiestos son divisibles entre 400
	// o entre 4, pero no entre 100
	if (($fecha % 400 == 0) || (($fecha % 100 !=0) && ($fecha % 4 == 0)))
		echo "$fecha es a�o bisiesto";
	else
		echo "$fecha no es a�o bisiesto";
?>