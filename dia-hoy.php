<?php
	// definición de función
	// muestra el nombre del día de la semana
	function diaDeHoy(){
		echo "Hoy es " . date('1',mktime());
	}
	// invocación de la función
	diaDeHoy();
?>