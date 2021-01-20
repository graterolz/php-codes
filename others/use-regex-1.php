<?php
	// define array of valid data
	$valid = array();
	// check username 
	if (isset($_POST['username']) && preg_match('/^([a-zA-Z]){3,8}$/', $_POST['username'])) {
		$valid['username'] = trim($_POST['username']);
	}
	else {
		die ('ERROR: User name not present or invalid.');
	}
	// check password
	if (isset($_POST['password']) && preg_match('/^(?=.*\d).{5,8}$/', $_POST['password'])) {
		$valid['password'] = trim($_POST['password']);
	}
	else {
		die ('ERROR: Password not present or invalid.');
	}
	// check SSN
	if (isset($_POST['ssn']) && preg_match('/^([0-9]){3}-([0-9]){2}-([0-9]){4}$/', $_POST['ssn'])) {
		$valid['ssn'] = trim($_POST['ssn']);
	}
	else {
		die ('ERROR: SSN not present or invalid.');
	}
?>