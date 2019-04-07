<?php
	// reemplaza '@' por 'arroba'
	// datos de salida: 'juan arroba dominio.net'
	$cadena = 'juan@dominio.net';
	echo str_replace('@',' arroba ', $cadena);
?>