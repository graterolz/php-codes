<?php
	// define una matriz
	$perfil = array("nombre" => "Susana","Apellido" => "De Tal","Sexo" => "Femenino","Sector" => "Administración de Recursos");
	print_r($perfil);
	echo "<br>";
	// ordena por valor
	// datos de salida: ('Sector' => 'Administración de Recursos' 'Apellido' => 'De Tal' 'Nombre' => 'Susana' 'Sexo' => 'Femenino')
	asort($perfil);
	print_r($perfil);
?>