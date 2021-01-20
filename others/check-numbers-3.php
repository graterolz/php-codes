<?php
	// define array of valid data
	$valid = array();
	// check if age is an integer value
	if (ctype_digit($_POST['age'])) {
		$valid['age'] = trim($_POST['age']); 
	}
	else {
		die ('ERROR: Age is not an integer value.');
	}
?>