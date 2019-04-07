<?php
	// copy file
	if (file_exists('example.txt')) {
		if (copy('example.txt', 'example.new.txt')) {
			echo 'File successfully copied.';
		}
		else {
			echo 'ERROR: File could not be copied.';
		}
	}
	else {
		echo 'ERROR: File does not exist.';
	}
?>