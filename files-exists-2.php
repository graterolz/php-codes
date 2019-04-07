<?php
	// check file
	if (file_exists('somefile.txt')) {
		$str = file_get_contents('somefile.txt');
	}
	else {
		echo 'Named file does not exist. ';
	}
	// check directory
	if (file_exists('somedir')) {
		$files = scandir('somedir');
	}
	else {
		echo 'Named directory does not exist.';
	}
?>