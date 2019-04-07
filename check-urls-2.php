<?php
	// function to validate a URL
	function validateUrl($str) {
		return filter_var($str, FILTER_VALIDATE_URL);
	}
	// check URLs
	// output: "valid"
	echo validateUrl("http://www.example.com/html/index.php") ? "valid" : "invalid";
	// output: "invalid"
	echo validateUrl("http:/examplecom") ? "valid" : "invalid";
?>