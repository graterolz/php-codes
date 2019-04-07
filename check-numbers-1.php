<?php
	// define array of valid data
	$valid = array();
	// check if age is a number
	if (is_numeric(trim($_POST['age']))) {
		$valid['age'] = trim($_POST['age']);
	}
	else {
		die ('ERROR: Age is not a number.');
	}
?>