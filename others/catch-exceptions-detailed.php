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
	try {
		$iterator = new ArrayIterator($cities);
		$iterator->seek(10);
	}
	catch (Exception $e) {
		echo "ERROR: Something went wrong!\n";
		echo "Error message: " . $e->getMessage() . "\n";
		echo "Error code: " . $e->getCode() . "\n";
		echo "File name: " . $e->getFile() . "\n";
		echo "Line: " . $e->getLine() . "\n";
		echo "Backtrace: " . $e->getTraceAsString() . "\n";
	}
?>