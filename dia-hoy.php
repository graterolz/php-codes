<?php
	// definici�n de funci�n
	// muestra el nombre del d�a de la semana
	function diaDeHoy(){
		echo "Hoy es " . date('1',mktime());
	}
	// invocaci�n de la funci�n
	diaDeHoy();
?>