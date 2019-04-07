<?php
	// define array of valid data
	$valid = array();
	// check for day
	if (!empty($_POST['day']) && ctype_digit($_POST['day'])) {
		$valid['day'] = trim($_POST['day']);
	}
	else {
		die ('ERROR: Day not present.');
	}
	// check for month
	if (!empty($_POST['month']) && ctype_digit($_POST['month'])) {
		$valid['month'] = trim($_POST['month']);
	}
	else {
		die ('ERROR: Month not present.');
	}
	// check for year
	if (!empty($_POST['year']) && ctype_digit($_POST['year'])) {
		$valid['year'] = trim($_POST['year']);
	}
	else {
		die ('ERROR: Year not present.');
	}
	// check for date validity
	if (!checkdate($valid['month'], $valid['day'], $valid['year'])) {
		die ('ERROR: Invalid date.');
	}
?>