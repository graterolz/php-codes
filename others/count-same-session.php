<?php
	session_start();
	if (!isset($_SESSION['count'])) {
		$_SESSION['count'] = 0;
	}
	echo 'You have visited this page ' . $_SESSION['count'] . ' time(s).';
	$_SESSION['count']++;
?>