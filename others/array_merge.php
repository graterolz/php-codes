 <?php
	// define matrices
	$oscuro = array('negro','caf�','azul');
	$claro = array('blanco','plateado','amarillo');
	print_r($oscuro);
	echo "<br>";
	print_r($claro);
	echo "<br>";
	// combina matrices
	// datos de salida: ('negro','caf�','azul','blanco','plateado','amarillo')
	$colores = array_merge($oscuro,$claro);
	print_r($colores);
?>