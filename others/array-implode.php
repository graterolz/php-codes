<?php
	// define array
	$arr = array('one','two','three','four');
	// convert array to string
	// output: 'one and two and three and four'
	$str = implode(' and ',$arr);
	print_r($str);
?>