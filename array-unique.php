<?php
	// define array
	$duplicates = array('a', 'b', 'a', 'c', 'e', 'd', 'e');
	// remove duplicates
	// output: ('a', 'b', 'c', 'e', 'd')
	$uniques = array_unique($duplicates);
	print_r($uniques);
?>