<?php
	// Mostramos los n�meros de los d�as del 1 a la fecha actual;
	$dia = date("d");
	$inicio = 1; 
	while($inicio<=$dia) {
		echo $inicio."<br>";
		$inicio++;
	}
?>