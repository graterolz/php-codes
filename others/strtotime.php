<?php
	// define una cadena de caracteres que contiene un valor de fecha
	// la convierte en un sello cronológico de UNIX
	// aplica formato utilizando date()
	// datos de salida: 'July 7 2008'
	$cadena = 'July 7 2008';
	echo date('d M y',strtotime($cadena));
	echo "<br>";
	// datos de salida: '12 Mar 09'
	echo date('d M y',strtotime('now'));
	echo "<br>";
	// datos de salida: '13 Mar 09'
	echo date('d M y',strtotime('tomorrow'));
	echo "<br>";
	// datos de salida: '16 Mar 09'
	echo date('d M y',strtotime('next Friday'));
	echo "<br>";
	// datos de salida: '10 Mar 09'
	echo date('d M y',strtotime('48 hours ago'));
	echo "<br>";
?>