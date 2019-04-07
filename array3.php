<?php
	// define matrices anidadas
	$directorio = array(
		array('nombre' => 'Raymundo Rabbit','tel' => '1234567','correo' => 'ray@planetaconejo.in'),
		array('nombre' => 'David Duck','tel' => '8562904','correo' => 'dduck@lagodepatos.corp'),
		array('nombre' => 'Omar Horse','tel' => '5942033','correo' => 'reyomar@mercadodelgranjero.cosasdecabalos.com')
	);
	// accede al valor anidado
	echo 'El número telefónico de David Dick es: ' . $directorio[1]['tel'];
?>