<?php
	echo "<pre>";
	$cadena = "123456789";
	$piece = substr($cadena,0);
	echo $piece."\n";
	$piece = substr($cadena,3);
	echo $piece."\n";
	$piece = substr($cadena,-3);
	echo $piece."\n";
	$piece = substr($cadena,3,3);
	echo $piece."\n";
	$piece = substr($cadena,2,-3);
	echo $piece."\n";
	$piece = substr($cadena,-6,-5);
	echo $piece."\n";
	echo "</pre>";
?>