<?php
	// define array of valid data
	$valid = array();
	// check for username
	if (!empty($_POST['username'])) {
		$valid['username'] = trim($_POST['username']);
	}
	else {
		die ('ERROR: Username not present.');
	}
	// check for password
	if (!empty($_POST['password'])) {
		$valid['password'] = trim($_POST['password']);
	}
	else {
		die ('ERROR: Password not present.');
	}
?>