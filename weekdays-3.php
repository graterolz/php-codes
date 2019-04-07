<?php
	$day = array("domingo","lunes","martes","miércoles","jueves","viernes","sábado");
	$daynumber = date("w");
	echo "Hoy es $day[$daynumber].";
?>