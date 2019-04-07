<?php
	// start session
	// record remote client name as session variable
	session_start();
	$_SESSION['verif_remote_agent'] = $_SERVER['HTTP_USER_AGENT'];
	echo 'Session started. Your session ID is: ' . session_id();
	// now try check-session.php
?>