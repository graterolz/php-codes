<?php
	// define una matriz
	$perfil = array("nombre" => "Susana","Apellido" => "De Tal","Sexo" => "Femenino","Sector" => "Administraci�n de Recursos");
	print_r($perfil);
	echo "<br>";
	// ordena por valor
	// datos de salida: ('Sector' => 'Administraci�n de Recursos' 'Apellido' => 'De Tal' 'Nombre' => 'Susana' 'Sexo' => 'Femenino')
	asort($perfil);
	print_r($perfil);
?>