<?php
	// maneja varias posibilidades
	// define un mensaje diferente para cada día
	$hoy = 'Martes';
	switch($hoy) {
		case 'Lunes':
			echo 'El lunes la cara del niño está limpia.';
			break;
		case 'Martes':
			echo 'El martes el niño está lleno de gracia.';
			break;
		case 'Miércoles':
			echo 'El miércoles el niño está lleno de preocupaciones';
			break;
		case 'Jueves':
			echo 'El jueves el niño se tiene que ir.';
			break;
		case 'Viernes':
			echo 'El viernes el niño es amoroso y dadivoso.';
			break;
		case 'Sábado':
			echo 'El sábado el niño trabaja duro.';
			break;
		default:
			echo 'No hay información disponible para ese día.';
			break;
	}
?>