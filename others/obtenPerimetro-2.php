<?php
	// definición de funciones
	// calcula el perímetro de un rectángulo
	// p = 2 * (l+a)
	function obtenPerimetro($largo,$ancho) {
		$perimetro = 2 * ($largo + $ancho);
		return $perimetro;
	}
	// invocación de la función con argumentos
	echo 'El perímetro de un rectángulo con 4 unidades de largo y 2 unidades de ancho es igual a: ' . obtenPerimetro(4,2) . ' unidades'; 
	obtenPerimetro(4,2);
?>