<?php
	// define una matriz
	$perfil = array("Nombre" => "Susana","Apellido" => "De Tal","Sexo" => "Femenino","Sector" => "Administraci�n de Recursos");
	print_r($perfil);
	echo "<br>";
	// ordena por palabra clave
	// datos de salida: ('Apellido' => 'De Tal' 'Nombre' => 'Susana' 'Sector' => 'Administraci�n de Recursos' 'Sexo' => 'Femenino')
	ksort($perfil);
	print_r($perfil);
?>