<?php
	// define exception
	class OtherException extends Exception { }
	class YetAnotherException extends Exception { }
	// set custom handler
	set_exception_handler('myHandler');
	// custom error handler
	function myHandler($e) {
		$body = "Uncaught exception: " . $e->getMessage() . " at line " . $e->getLine() . " of " . $e->getFile();
		@mail('admin@domain', 'Uncaught exception', $body, 'From:bounce@domain');
	}
	//
	try {
		throw new OtherException('Catch me if you can.');
	}
	catch (YetAnotherException $e) {
		echo $e->getMessage();
	}
?>