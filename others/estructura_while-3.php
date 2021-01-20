<?php
	// Mostramos los números de los días del 1 a la fecha actual;
	$dia = date("d");
	$inicio = 1; 
	while($inicio<=$dia) {
		echo $inicio."<br>";
		$inicio++;
	}
?>