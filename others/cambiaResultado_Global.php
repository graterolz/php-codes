<?php
	// define funci�n
	// cambia el valor de $resultado
	function cambiaResultado() {
		global $resultado;
		$resultado = 25;
	}
	// define una variable en el programa principal
	// presenta su valor
	$resultado = 11;
	echo 'El resultado es ' . $resultado; // datos de salida: 11
	echo "<br>";
	// ejecuta la funci�n cambiaResultado
	cambiaResultado();
	// presenta el valor de $resultado otra vez
	echo 'El resultado es: ' . $resultado; // datos de salida: 25
?>