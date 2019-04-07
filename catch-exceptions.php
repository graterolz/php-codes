<?php
	// define array
	$cities = array(
		"United Kingdom" => "London", 
		"United States" => "Washington", 
		"France" => "Paris", 
		"India" => "Delhi"
	);
	// try accessing a non-existent array element
	// generates an OutOfBoundsException 
	// output: 'Exception: Seek position 10 is out of range'
	try {
		$iterator = new ArrayIterator($cities);
		$iterator->seek(10);
	}
	catch (Exception $e) {
		echo 'ERROR: An exception occurred in your script.';
	}
?>