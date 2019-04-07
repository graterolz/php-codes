<?php
	// define array of valid data
	$valid = array();
	// check for username
	if (!empty($_POST['username'])) {
		$username = trim($_POST['username']);
	}
	else {
		die ('ERROR: Username not present.');
	}
	// check username length
	if (strlen($username) <= 25) {
		$valid['username'] = $username;
	}
	else {
		die ('ERROR: Username too long.');
	}
?>