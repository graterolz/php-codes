<?php
	// control caching
	header('Cache-Control: no-cache');
	// set content-type
	header('Content-Type: text/xml');
	// set content-encoding
	echo "<?xml version='1.0'?><doc><element/></doc>";
?>