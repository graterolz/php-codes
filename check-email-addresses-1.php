<?php
	//|function to validate
	// an e-mail address
	function validateEmailAddress($str) {
		return preg_match("/^([a-z0-9_-])+([\.a-z0-9_-])*@([a-z0-9-])+(\.[a-z0-9-]+)*\.([a-z]{2,6})$/", strtolower($str));
	}
	// check e-mail address
	// output: 'valid'
	echo validateEmailAddress("joe@some.domain.com") ? "valid" : "invalid";
	// check e-mail address
	// output: 'invalid'
	echo validateEmailAddress("joe@dom.") ? "valid" : "invalid";
?>