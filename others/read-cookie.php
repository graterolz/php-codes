<?php
	// read cookie
	if (isset($_COOKIE['email'])) {
		echo 'Welcome back, ' . $_COOKIE['email'] . '!';
	}
	else {
		echo 'Hello, new user!';
	}
?>