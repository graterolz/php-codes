<?php
	// define función
	// calcula el promedio de los valores proporcionales
	function calPromedio() {
		$args = func_get_args();
		$cuenta = func_num_args();
		$suma = array_sum($args);
		$prom = $suma / $cuenta;
		return $prom;
	}
	// invoca la función con 8 argumentos
	// datos de salida: 150
	echo calPromedio(100,200,100,300,50,150,250,50);
?>