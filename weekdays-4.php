<?php
	$day = array("domingo","lunes","martes","miércoles","jueves","viernes","sábado");
	$daynumber = date("w");
	echo "Hoy es $day[$daynumber].<br>\n";
	$elementnumber = count($day);
	echo "La semana tiene $elementnumber dias.\n";
?>