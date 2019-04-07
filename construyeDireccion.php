<?php
	// define una función
	// genera una dirección electrónica a partir de los valores proporcionados
	function construyeDireccion($nombreusuario,$dominio='midominio.info') {
		return $nombreusuario . '@' . $dominio;
	}
	// invoca la función sin argumentos opcionales
	// datos de salida: ' Mi dirección de correo electrónico es juan@midominio.info'
	echo ' Mi dirección de correo electrónico es ' . construyeDireccion('juan');
	echo "<br>";
	// invoca la función con arumentos opcionales
	// datos de salida: ' Mi dirección de correo electrónico es diana@dominiobueno.net '
	echo ' Mi dirección de correo electrónico es ' . construyeDireccion('diana','dominiobueno.net');
?>