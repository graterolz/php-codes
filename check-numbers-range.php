<?php
	// define array of valid data
	$valid = array();
	// check if day is an integer value and between 1 and 31
	if ((strval($_POST['day']) == strval((int)$_POST['day'])) && ($_POST['day'] >= 1 && $_POST['day'] <= 31)) {
		$valid['day'] = trim($_POST['day']); 
	}
	else {
		die ('ERROR: Age is not an integer value.');
	}
?>