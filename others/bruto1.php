<?php
	$preciobruto = 119.6;
	$iva = 0.16;
	$resultado = $preciobruto - $preciobruto / (1 + $iva);
	echo round($resultado,2);
?>