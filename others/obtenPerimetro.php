<?php
	// definición de funciones
	// calcula el perímetro de un rectángulo
	// p = 2 * (l+a)
	function obtenPerimetro($largo,$ancho)
	{
	 $perimetro = 2 * ($largo + $ancho);
	 echo "El perímetro de un rectángulo con $largo unidades de largo y $ancho unidades de ancho es igual a $perimetro unidades"; 
	}
	// invocación de la función con argumentos
	obtenPerimetro(4,2);
?>