<?php
	// get file information
	// output: 'File is: readable writable'
	if (file_exists('example.txt')) {
		echo 'File is: ';
		// check for readable bit
		if (is_readable('example.txt')) {
			echo ' readable ';
		}
		// check for writable bit
		if (is_writable('example.txt')) {
			echo ' writable ';
		}
		// check for executable bit
		if (is_executable('example.txt')) {
			echo ' executable ';
		}
	}
	else {
		echo 'Named file does not exist. ';
	}
?>