<?php
	// define funci�n
	// cambia el valor de $resultado
	function cambiaResultado() {
		$resultado = 25;
	}
	// define una variable en el programa principal
	// presenta su valor
	$resultado = 11;
	echo 'El resultado es ' . $resultado; // datos de salida: 11
	// ejecuta la funci�n cambiaResultado()
	cambiaResultado();
	echo "<br>";
	// presenta otra vez el valor de $resultado
	echo 'El resultado es ' . $resultado; // datos de salida: 11
?>