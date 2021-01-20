<?php
	$cuenta = 0;
	// recorre el bucle 5 veces
	while ($cuenta <= 4) {
		$cuenta++;
		// cuando el contador llega a 3
		// rompe el bucle
		if($cuenta == 3)
			break;
	}
	echo "Esta es la interacción # $cuenta <br/>";
?>