<?php
	// define una matriz
	$carros = array('Ferrari', 'Porsche', 'Jaguar', 'Lamborghini', 'Mercedes');
	// define una matriz asociada
	$frutas = array('m' => 'manzana','p' => 'plátano','i' => 'piña','u' => 'uva');
	echo 'La fruta seleccionada es: ' . $frutas['m'];
	// define una matriz
	$carros[0] = 'Ferrari';
	$carros[1] = 'Porsche';
	$carros[2] = 'Jaguar';
	$carros[3] = 'Lamborghini';
	$carros[4] = 'Mercedes';
	// define una matriz
	$carros[] = 'Ferrari';
	$carros[] = 'Porsche';
?>