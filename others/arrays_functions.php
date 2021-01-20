<?php
	// define una matriz
	$filmes = array('El Rey León','Cars','Bichos');
	print_r($filmes);
	echo "<br>";
	echo count($filmes);
	echo "<br>";
	// elimina el primer elemento de la matriz
	array_shift($filmes);
	print_r($filmes);
	echo "<br>";
	echo count($filmes);
	echo "<br>";
	// elimina el primer elemento de la matriz
	array_pop($filmes);
	print_r($filmes);
	echo "<br>";
	echo count($filmes);
	echo "<br>";
	// añade un elemento al final de la matriz
	array_push($filmes,'Rataouille');
	print_r($filmes);
	echo "<br>";
	echo count($filmes);
	echo "<br>";
	// añade un elemento al principio de la matriz
	array_unshift($filmes,'Los Increíbles');
	print_r($filmes);
	echo "<br>";
	echo count($filmes);
	echo "<br>";
?>