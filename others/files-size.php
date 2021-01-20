<?php
	// get file size
	// output: 'File is 1327 bytes.'
	if (file_exists('example.txt')) {
		echo 'File is ' . filesize('example.txt') . ' bytes.';
	} else {
		echo 'Named file does not exist. ';
	}
?>