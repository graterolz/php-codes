<?php
	// define array
	$rainbow = array('violet', 'indigo', 'blue', 'green', 'yellow', 'orange', 'red');
	// extract 3 central values
	// output: ('blue', 'green', 'yellow')
	$arr = array_slice($rainbow, 2, 3);
	print_r($arr);
?>