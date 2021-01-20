<?php
	// define una matriz
	$ciudades = array("Reino Unido" => "Londres","Estados Unidos" => "Washington","Francia" => "París","India" => "Delhi");
	print_r($ciudades);
	echo "<br>";
	// busca palabra clave en la matriz
	echo array_key_exists('India',$ciudades);
?>