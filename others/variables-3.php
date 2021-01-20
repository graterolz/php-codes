<?php
	// definir una variable
	$atributo = 'precio';
	// crear una variable dinámica
	// su nombre surge dinámicamente
	// del valor de la variable $atributo
	${$atributo} = 678;
	// dato de salida: 678
	echo $precio;
?>