<?php
	// get file information
	if (file_exists('example.txt')) {
		print_r(stat('example.txt'));
	}
	else {
		echo 'Named file does not exist. ';
	}
?>