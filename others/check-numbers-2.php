<?php
	// define array of valid data
	$valid = array();
	// check if age is an integer value
	if (strval($_POST['age']) == strval((int)$_POST['age'])) {
		$valid['age'] = trim($_POST['age']); 
	}
	else {
		die ('ERROR: Age is not an integer value.');
	}
	// check if price is a floating-point value
	if (strval($_POST['price']) == strval((float)$_POST['price'])) {
		$valid['price'] = trim($_POST['price']);
	}
	else {
		die ('ERROR: Price is not a decimal value.');
	}
?>