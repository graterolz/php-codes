<?php
	// datos de salida: "Hora y fecha actual: 12:28 pm 20 Mar 2008"
	echo 'Hora y fecha actual: ' . date("h:i a d M Y",mktime(12,28,13,3,20,2008));
	echo "<br>";
	// datos de salida: "Hora y fecha actual: 8:15 14 Feb 2008"
	echo 'Hora y fecha actual: ' . date("H:i d F Y",mktime(8,15,2,14,2008));
	echo "<br>";
	// datos de salida: "La fecha de hoy es Oct-05-2007"
	echo "La fecha de hoy es " . date("M-d-Y", mktime(0,0,0,10,5,2007));
	echo "<br>";
	// datos de salida: 'Sun'
	echo date('D',mktime(0,0,0,10,5,2008));
	echo "<br>";
	// muestra una lista con los nombres de los meses
	// datos de salida: 'January, February,...,December'
	foreach(range(1,12) as $m)
		$meses[] = date('F',mktime(0,0,0,$m,1,0));
	echo implode($meses,', ');
?>