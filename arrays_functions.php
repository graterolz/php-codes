<?php
	// define una matriz
	$filmes = array('El Rey Le�n','Cars','Bichos');
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
	// a�ade un elemento al final de la matriz
	array_push($filmes,'Rataouille');
	print_r($filmes);
	echo "<br>";
	echo count($filmes);
	echo "<br>";
	// a�ade un elemento al principio de la matriz
	array_unshift($filmes,'Los Incre�bles');
	print_r($filmes);
	echo "<br>";
	echo count($filmes);
	echo "<br>";
?>