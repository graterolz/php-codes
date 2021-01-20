<?php
	// set file name
	// attempt to copy and then delete file
	$file = 'dummy.txt';
	try {
		if (!file_exists($file)) {
			throw new Exception("File '$file' was not found.");
		}
		if (file_exists("$file.new")) {
			throw new Exception("Destination file '$file.new' already exists.");
		}
		if (!copy($file, "$file.new")) {
			throw new Exception("File '$file' could not be copied.");
		}
		if (!unlink($file)) {
			throw new Exception("File '$file' could not be removed.");
		}
	}
	catch (Exception $e) {
		echo 'Oops! Something bad happened on line ' . $e->getLine() . ': ' . $e->getMessage();
		exit();
	}
	echo 'SUCCESS: File operation successful.';
?>