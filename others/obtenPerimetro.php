<?php
	// definici�n de funciones
	// calcula el per�metro de un rect�ngulo
	// p = 2 * (l+a)
	function obtenPerimetro($largo,$ancho)
	{
	 $perimetro = 2 * ($largo + $ancho);
	 echo "El per�metro de un rect�ngulo con $largo unidades de largo y $ancho unidades de ancho es igual a $perimetro unidades"; 
	}
	// invocaci�n de la funci�n con argumentos
	obtenPerimetro(4,2);
?>