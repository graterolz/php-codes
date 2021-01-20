<?php
	if (!isset($_COOKIE['count'])) {
		$count = 0;
	}
	else {
		$count = $_COOKIE['count'];
	}
	setcookie('count', ($count+1), mktime()+2592000, '/');
	echo 'You have visited this page ' . $count . ' time(s).';
?>