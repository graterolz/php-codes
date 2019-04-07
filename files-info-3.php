<?php
	// test if file or directory
	if (file_exists('example.txt')) {
		if (is_file('example.txt')) {
			echo 'It\'s a file.';
		}
		if (is_dir('example.txt')) {
			echo 'It\'s a directory.';
		} 
	}
	else {
		echo 'ERROR: File does not exist.';
	}
?>