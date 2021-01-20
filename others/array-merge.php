<?php
	// define arrays
	$dark = array('black','brown','blue');
	$light = array('white','silver','yellow');
	// merge arrays
	// output: ('black','brown','blue','white','silver','yellow')
	$colors = array_merge($dark,$light);
	print_r($colors);
?>