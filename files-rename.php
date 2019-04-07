<?php
	// rename/move file
	if (file_exists('example.txt')) {
		if (rename('example.txt', '../example.new.txt')) {
			echo 'File successfully renamed.';
		}
		else {
			echo 'ERROR: File could not be renamed.';
		}
	}
	else {
		echo 'ERROR: File does not exist.';
	}
	// rename directory
	if (file_exists('mydir')) {
		if (rename('mydir', 'myotherdir')) {
			echo 'Directory successfully renamed.';
		}
		else {
			echo 'ERROR: Directory could not be renamed.';
		}
	}
	else {
		echo 'ERROR: Directory does not exist.';
	}
?>