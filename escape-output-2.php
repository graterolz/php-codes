<?php
	// define array of sanitized data
	$sanitized = array();
	// get remote data
	$out = 'He<script>document.location.href="http://go.somewhere.bad.com/";</script>llo';
	// convert all special characters to entities
	// before using it
	$sanitized['out'] = htmlentities($out);
	echo $out; // unsafe
	echo $sanitized['out']; // safe
?>