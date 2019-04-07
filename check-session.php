<?php
	// check session
	// also check remote client name
	session_start();
	if (!isset($_SESSION['verif_remote_agent']) || $_SESSION['verif_remote_agent'] != $_SERVER['HTTP_USER_AGENT']) {
		die('Session check failed.');
	}
	else {
		echo 'Session verified.';
	}
?>