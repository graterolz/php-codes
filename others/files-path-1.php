<?php
	// get file path
	// output: 'File path: /usr/local/apache/htdocs/
	// php-book/ch06/listings/example.txt'
	if (file_exists('example.txt')) {
		echo 'File path: ' . realpath('example.txt');
	}
	else {
		echo 'Named file does not exist. ';
	}
?>