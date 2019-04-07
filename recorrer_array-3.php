<?php
	// define una matriz
	$ciudades = array("Reino Unido" => "Londres","Estados Unidos" => "Washington","Francia" => "París","India" => "Delhi");

	// hace iteraciones sobre la matriz
	// presenta cada valor
	foreach($ciudades as $clave => $valor) 
		echo "$valor es la capital de $clave. \r\n";
?>