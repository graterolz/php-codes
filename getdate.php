<?php
	// obtiene la fecha y horas actuales como una matriz
	$hoy = getdate();
	echo 'Fecha y hora actual: ' . $hoy['hours'] . ':' . $hoy['minutes'] . ':' . $hoy['seconds'] . ' del ' . $hoy['mday'] . '-' . $hoy['mon'] . '-' . $hoy['year'];
?>