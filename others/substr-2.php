<?php
	// extrae subcadena
	// datos de salida: 'nven'
	$cadena = 'Bienvenido a ninguna parte';
	echo substr($cadena,3,4);
	echo "<br>";
	echo substr($cadena,3,5) . " - " . substr($cadena,-4,4);
?>