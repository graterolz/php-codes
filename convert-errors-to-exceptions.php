<?php
	class Warning extends Exception { }
	class Notice extends Exception { }
	error_reporting(E_ALL);
	set_error_handler('myHandler');
	// custom error handler
	function myHandler($type, $msg, $file, $line, $context) {
		switch($type) {
			case E_NOTICE:
				throw new Notice($msg);
				break;
			case E_WARNING:
				throw new Warning($msg);
				break;
		}
	}
	//
	try {
		echo 45/0;
	}
	catch (Notice $e) {
		echo 'NOTICE: ' . $e->getMessage();
	}
	catch (Warning $e) {
		echo 'WARNING: ' . $e->getMessage();
	}
	catch (Exception $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
?>