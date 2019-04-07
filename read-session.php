<?php
	// start session
	session_start();
	// read session variables
	// output: 'Welcome back, Ronald Rabbit'
	echo 'Welcome back, ' . $_SESSION['name'] . ' ' . $_SESSION['species'] ;
?>