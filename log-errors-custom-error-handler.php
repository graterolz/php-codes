<?php
	// custom handler
	function myHandler($type, $msg, $file, $line, $context) {
		error_log("[" . date("d-M-Y h:i:s", mktime()) . "] $msg on line $line of $file\n", 3, 'debug.log');
		return false;
	}
	// report all errors
	error_reporting(E_ALL);
	// set custom handler
	set_error_handler("myHandler");
	// trigger E_NOTICE (undefined variable)
	echo $someVar;
	// trigger E_WARNING (missing file)
	include("common.php");
?>