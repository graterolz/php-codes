<?php
	echo "<pre>";
	$cadena = "blah@imaginary.com";
	$subcadena = "@";
	$inicio_dominio = strpos($cadena,$subcadena);
	echo $inicio_dominio;
	echo "<br>";
	$dominio = substr($cadena,($inicio_dominio+1));
	echo $dominio;
	echo "</pre>";
?>