<?php
	// define variables de dos tipos
	// pero con el mismo valor
	$bool = (boolean) 1;
	$num = (integer) 1;
	// regresa el valor de verdadero (true)
	echo ($bool == $num);
	// regresa el valor de falso (false)
	echo ($bool === $num);
?>