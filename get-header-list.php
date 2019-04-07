<?php
	// control caching
	header('Cache-Control: no-cache');
	// set content-type
	header('Content-Type: text/plain');
	// print header list
	print_r(headers_list());
?>