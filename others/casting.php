<?php
	$cadena = "5";
	$entero = 3;
	echo $cadena+$entero."<br>";
	$mivar = "3";
	$mivar = 2 + $mivar;
	echo $mivar."<br>";
	$mivar = (string)123;
	echo $mivar."<br>";
	settype($mivar,"double");
	echo $mivar."<br>";
	$mivar = 3.5;
	$mivar = (integer)$mivar;
	echo $mivar."<br>";
	$mivar = (boolean)$mivar;
	echo $mivar."<br>";
?>