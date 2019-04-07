<?php
	// function to validate
	// an e-mail address
	function validateEmailAddress($str) {
		return filter_var($str, FILTER_VALIDATE_EMAIL);
	}
	// check e-mail address
	// output: 'valid'
	echo validateEmailAddress("joe@some.domain.com") ? "valid" : "invalid";
	// check e-mail address
	// output: 'invalid'
	echo validateEmailAddress("joe@dom.") ? "valid" : "invalid";
?>