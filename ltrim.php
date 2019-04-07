<?php
	echo "<pre>";
	$cadena = "\tHola, como te va?\n";
	echo $cadena;
	$sin_tab = ltrim($cadena,"\t");
	echo $sin_tab;
	$trim_primera_letra = ltrim($cadena,"H");
	echo $trim_primera_letra;
	echo "</pre>";
?>