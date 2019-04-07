<?php
	class FileException extends Exception { }
	class SQLException extends Exception { }
	// generate an uncaught exception
	try {
		throw new FileException();
		echo 'Still running...';
	}
	catch (SQLException $e) {
		echo 'Caught you!';
	}
?>
