<?php
	// define una matriz
	$carnes = array('pescado','pollo','jam�n','cordero');
	// cambia jam�n por pavo
	echo 'El tipo de carne seleccionado es: ' . $carnes[2];
	$carnes[2] = 'pavo';
	echo "<br>";
	echo 'Ahora el tipo de carne cambi� a: ' . $carnes[2]; 
	echo "<br>";
	// elimina 'pescado'
	echo 'El tipo de carne seleccionado es: ' . $carnes[0];
	unset($carnes[0]);
	echo "<br>";
	if($carnes[0]==null)
		echo 'No ha seleccionado alg�n tipo de carne.';
?>