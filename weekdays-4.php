<?php
	$day = array("domingo","lunes","martes","mi�rcoles","jueves","viernes","s�bado");
	$daynumber = date("w");
	echo "Hoy es $day[$daynumber].<br>\n";
	$elementnumber = count($day);
	echo "La semana tiene $elementnumber dias.\n";
?>