<?php
	// maneja varias posibilidades
	// define un mensaje diferente para cada d�a
	$hoy = 'Martes';
	if($hoy == 'Lunes')
		echo 'El lunes la cara del ni�o est� limpia.';
	elseif($hoy == 'Martes')
		echo 'El martes el ni�o est� lleno de gracia.';
	elseif($hoy == 'Mi�rcoles')
		echo 'El mi�rcoles el ni�o est� lleno de preocupaciones';
	elseif($hoy == 'Jueves')
		echo 'El jueves el ni�o se tiene que ir.';
	elseif($hoy == 'Viernes')
		echo 'El viernes el ni�o es amoroso y dadivoso.';
	elseif($hoy == 'S�bado')
		echo 'El s�bado el ni�o trabaja duro.';
	else
		echo 'No hay informaci�n disponible para ese d�a.';
?>