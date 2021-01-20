<?php
	// server doc root is: /var/www/html/
	// config file stored in: /var/www/apps/conf/
	// your script can read this path
	include_once '/var/www/apps/conf/myapp.conf'; // will work
	// an attacker accessing the same path over HTTP cannot
	file_get_contents('http://localhost/../apps/conf/myapp.conf'); // will fail
?>