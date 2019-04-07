<?php
	// get file path info as array
	if (file_exists('example.txt')) {
		print_r(pathinfo('example.txt'));
	}
	else {
		echo 'Named file does not exist. ';
	}
?>