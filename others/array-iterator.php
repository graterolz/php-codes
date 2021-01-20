<?php
	// define array
	$cities = array(
		"United Kingdom" => "London",
		"United States" => "Washington",
		"France" => "Paris",
		"India" => "Delhi"
	);
	// create an ArrayIterator object
	$iterator = new ArrayIterator($cities);
	// rewind to beginning of array
	$iterator->rewind();
	// iterate over array
	// print each value
	while($iterator->valid()) {
		print $iterator->current() . " is in " . $iterator->key() . ". \r\n";
		$iterator->next();
	}
?>