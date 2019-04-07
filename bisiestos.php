<?php
	$fecha = 2008;
	// los años bisiestos son divisibles entre 400
	// o entre 4, pero no entre 100
	if (($fecha % 400 == 0) || (($fecha % 100 !=0) && ($fecha % 4 == 0)))
		echo "$fecha es año bisiesto";
	else
		echo "$fecha no es año bisiesto";
?>