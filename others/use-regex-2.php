<?php
	// define array of valid data
	$valid = array();
	// check telephone number
	if (isset($_POST['tel']) && preg_match("/^(\+|00)[1-9]{8,14}$/", $_POST['tel'])) {
		$valid['tel'] = trim($_POST['tel']);
	}
	else {
		die ('ERROR: Telephone number not present or invalid.');
	}
?>