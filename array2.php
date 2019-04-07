<?php
	// define una matriz
	$carnes = array('pescado','pollo','jamón','cordero');
	// cambia jamón por pavo
	echo 'El tipo de carne seleccionado es: ' . $carnes[2];
	$carnes[2] = 'pavo';
	echo "<br>";
	echo 'Ahora el tipo de carne cambió a: ' . $carnes[2]; 
	echo "<br>";
	// elimina 'pescado'
	echo 'El tipo de carne seleccionado es: ' . $carnes[0];
	unset($carnes[0]);
	echo "<br>";
	if($carnes[0]==null)
		echo 'No ha seleccionado algún tipo de carne.';
?>