<?php
	// maneja varias posibilidades
	// define un mensaje diferente para cada día
	$hoy = 'Martes';
	if($hoy == 'Lunes')
		echo 'El lunes la cara del niño está limpia.';
	elseif($hoy == 'Martes')
		echo 'El martes el niño está lleno de gracia.';
	elseif($hoy == 'Miércoles')
		echo 'El miércoles el niño está lleno de preocupaciones';
	elseif($hoy == 'Jueves')
		echo 'El jueves el niño se tiene que ir.';
	elseif($hoy == 'Viernes')
		echo 'El viernes el niño es amoroso y dadivoso.';
	elseif($hoy == 'Sábado')
		echo 'El sábado el niño trabaja duro.';
	else
		echo 'No hay información disponible para ese día.';
?>