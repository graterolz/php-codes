<?php
	// maneja varias posibilidades
	// define un mensaje diferente para cada d�a
	$hoy = 'Martes';
	switch($hoy) {
		case 'Lunes':
			echo 'El lunes la cara del ni�o est� limpia.';
			break;
		case 'Martes':
			echo 'El martes el ni�o est� lleno de gracia.';
			break;
		case 'Mi�rcoles':
			echo 'El mi�rcoles el ni�o est� lleno de preocupaciones';
			break;
		case 'Jueves':
			echo 'El jueves el ni�o se tiene que ir.';
			break;
		case 'Viernes':
			echo 'El viernes el ni�o es amoroso y dadivoso.';
			break;
		case 'S�bado':
			echo 'El s�bado el ni�o trabaja duro.';
			break;
		default:
			echo 'No hay informaci�n disponible para ese d�a.';
			break;
	}
?>