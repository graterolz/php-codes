<?php
	// define una funci�n
	// genera una direcci�n electr�nica a partir de los valores proporcionados
	function construyeDireccion($nombreusuario,$dominio='midominio.info') {
		return $nombreusuario . '@' . $dominio;
	}
	// invoca la funci�n sin argumentos opcionales
	// datos de salida: ' Mi direcci�n de correo electr�nico es juan@midominio.info'
	echo ' Mi direcci�n de correo electr�nico es ' . construyeDireccion('juan');
	echo "<br>";
	// invoca la funci�n con arumentos opcionales
	// datos de salida: ' Mi direcci�n de correo electr�nico es diana@dominiobueno.net '
	echo ' Mi direcci�n de correo electr�nico es ' . construyeDireccion('diana','dominiobueno.net');
?>