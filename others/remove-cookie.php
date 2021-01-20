<?php
	// remove cookie
	$ret = setcookie('role', 'moderator', mktime()-1600, '/admin');
	if ($ret) {
		echo 'Cookie headers successfully transmitted.';
	}
?>