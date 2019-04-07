<?php
	// define función
	// divide una cadena de texto en palabras
	// La invierte y hace el regreso a manera de matriz
	function invierteMe($frase) {
		$palabras = explode(' ',$frase);
		foreach($palabras as $k => $v)
			$palabras[$k] = strrev($v);
		return $palabras;
	}
	// invoca la función 
	// datos de salida: 'aíd neuB'
	echo implode(' ',invierteMe('Buen día'));
	echo "<br>";
	// invoca la función 
	// datos de salida: 'eT saírasca agimnoc'
	echo implode(' ',invierteMe('Te casarías conmigo'));
?>