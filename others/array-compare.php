<?php
	// define arrays
	$orange = array('red','yellow');
	$green = array('yellow','blue');
	// find common elements
	// output: ('yellow')
	$common = array_intersect($orange,$green);
	print_r($common);
	// find elements in first array but not in second
	// output: ('red')
	$unique = array_diff($orange,$green);
	print_r($unique);
?>