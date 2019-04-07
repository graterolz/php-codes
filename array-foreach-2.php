<?php
	// define array
	$cities = array(
		"United Kingdom" => "London",
		"United States" => "Washington",
		"France" => "Paris",
		"India" => "Delhi"
	);
	// iterate over array
	// print each value
	foreach ($cities as $key => $value) {
		echo "$value is in $key. \r\n";
	}
?>