<?php
	// open output buffer
	ob_start();
	// send some output
	// this gets stored in the buffer
	echo 'Here is some output';
	// send some headers
	header('Content-Type: text/plain');
	session_start();
	// now display the output
	ob_end_flush();
?>