<?php
	// define string variable
	$whoami = 'Sarah';
	// output: 'string'
	echo gettype($whoami);
	// assign new integer value to variable
	$whoami = 99.8;
	// output: 'double'
	echo gettype($whoami);
	// destroy variable
	unset($whoami);
	// output: 'NULL'
	echo gettype($whoami);
?>