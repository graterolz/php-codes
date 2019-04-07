<?php
	// define una matriz
	$perfil = array("Nombre" => "Susana","Apellido" => "De Tal","Sexo" => "Femenino","Sector" => "Administración de Recursos");
	print_r($perfil);
	echo "<br>";
	// ordena por palabra clave
	// datos de salida: ('Apellido' => 'De Tal' 'Nombre' => 'Susana' 'Sector' => 'Administración de Recursos' 'Sexo' => 'Femenino')
	ksort($perfil);
	print_r($perfil);
?>