<?php
	// formar un número (con valores por defecto
	// datos de salida: 1,106,483
	$num = 1106482.5842;
	echo number_format($num);
	echo "<br>";
	// formar un número (con separadores personalizados)
	// datos de salida: 1?106?482*584
	echo number_format($num,3,'*','?');
?>