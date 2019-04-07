<?php
	// function definition
	// generate e-mail address from supplied values
	function buildAddress($username, $domain = 'mydomain.info') {
		return $username . '@' . $domain;
	}
	// function invocation
	// without optional argument
	// output: 'My e-mail address is john@mydomain.info'
	echo 'My e-mail address is ' . buildAddress('john');
	// function invocation
	// with optional argument
	// output: 'My e-mail address is jane@cooldomain.net'
	echo 'My e-mail address is ' . buildAddress('jane', 'cooldomain.net');
?>