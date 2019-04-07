<?php
	// define array
	$cities = array(
		"United Kingdom" => "London", 
		"United States" => "Washington", 
		"France" => "Paris", 
		"India" => "Delhi"
	);
	// search array for key
	echo array_key_exists('India', $cities);
?>