<?php
	// define funci�n
	// divide una cadena de texto en palabras
	// La invierte y hace el regreso a manera de matriz
	function invierteMe($frase) {
		$palabras = explode(' ',$frase);
		foreach($palabras as $k => $v)
			$palabras[$k] = strrev($v);
		return $palabras;
	}
	// invoca la funci�n 
	// datos de salida: 'a�d neuB'
	echo implode(' ',invierteMe('Buen d�a'));
	echo "<br>";
	// invoca la funci�n 
	// datos de salida: 'eT sa�rasca agimnoc'
	echo implode(' ',invierteMe('Te casar�as conmigo'));
?>