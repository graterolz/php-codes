<?php
	// define array of valid data
	$valid = array();
	// check for first name
	if (isset($_POST['firstname']) && ctype_alpha($_POST['firstname'])) {
		$valid['firstname'] = trim($_POST['firstname']);
	}
	else {
		die ('ERROR: First name not present or invalid.');
	}
?>