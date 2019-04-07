<?php
	// function to validate a URL
	function validateUrl($str) {
		return preg_match("/^(http|https|ftp):\/\/([a-z0-9]([a-z0-9_-]*[a-z0-9])?\.)+[a-z]{2,6}\/?([a-z0-9\?\._-~&#=+%]*)?/", strtolower($str));
	}
	// check URLs
	// output: "valid"
	echo validateUrl("http://www.example.com/html/index.php") ? "valid" : "invalid";
	// output: "invalid"
	echo validateUrl("http://examplecom") ? "valid" : "invalid";
?>
