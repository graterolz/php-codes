<?php
	// definici�n de funciones
	// calcula el per�metro de un rect�ngulo
	// p = 2 * (l+a)
	function obtenPerimetro($largo,$ancho) {
		$perimetro = 2 * ($largo + $ancho);
		return $perimetro;
	}
	// invocaci�n de la funci�n con argumentos
	echo 'El per�metro de un rect�ngulo con 4 unidades de largo y 2 unidades de ancho es igual a: ' . obtenPerimetro(4,2) . ' unidades'; 
	obtenPerimetro(4,2);
?>