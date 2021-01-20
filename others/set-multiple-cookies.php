<?php
	// set multiple cookies
	$ret1 = setcookie('username', 'killawhale', mktime()+129600, '/');
	$ret2 = setcookie('email', 'john@somewebsite.com', mktime()+86400, '/');
	$ret3 = setcookie('role', 'moderator', mktime()+3600, '/admin');
	if ($ret1 && $ret2 && $ret3) {
		echo 'Cookie headers successfully transmitted.';
	}
?>