<?php
	// define array of valid data
	$valid = array();
	// check for bid increment
	if (isset($_POST['increment']) && trim($_POST['increment']) != '') {
		$valid['increment'] = trim($_POST['increment']);
	}
	else {
		die ('ERROR: Increment value not present.');
	}
?>