<?php
	// define una matriz de calificaciones que van de 1 a 100
	$calificaciones = array(25,64,23,87,56,38,78,57,98,95,81,67,75,76,74,82,36,39,54,43,49,65,69,69,78,17,91);
	// obtiene la cantidad de calificaciones
	$cuenta = count($calificaciones);
	// hace iteraciones sobre la matriz
	// calcula el total y el 20% superior e inferior
	$total = $sup = $inf = 0;
	foreach($calificaciones as $g) {
		$total += $g;
		if($g<=20)
			$inf++;
		if($g>=80)
			$sup++; 
	}
	// calcula el promedio
	$prom = round($total / $cuenta);
	// presenta en pantalla las estad�sticas
	echo "Promedio del grupo: $prom <br />";
	echo "N�mero de estudiantes en el 20% inferior: $inf <br />";
	echo "N�mero de estudiantes en el 20% superior: $sup <br />";
?>