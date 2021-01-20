<?php
	// define array of sanitized data
	$sanitized = array();
	// strip tags from POST input
	if (isset($_POST['name']) && !empty($_POST['name'])) {
		$sanitized['name'] = strip_tags($_POST['name']);
	}
?>