<?php
	$array1 = array("a" => "green", "red", "blue", "red");
	$array2 = array("b" => "green", "yellow", "red");
	print_r($array1);
	echo "<br>";
	print_r($array2);
	echo "<br>";
	$result = array_intersect($array1, $array2);
	print_r($result);
?>