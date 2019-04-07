<?php
	// check if headers sent
	// if no, send headers
	// if yes, display error message
	if (!headers_sent()) {
		header('Cache-Control: no-cache');
		header('Content-Type: text/plain');
		echo 'Headers sent.';
	}
	else {
		die ('ERROR: Cannot send headers!');
	}
?>