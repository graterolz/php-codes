<?php
	// get current date and time as array
	$now = getdate();
	print_r($now);
	// output: 'It is now 19:26:23 on 12-11-2007'
	echo 'It is now ' . $now['hours'] . ':' . $now['minutes'] . ':' . $now['seconds'] . ' on ' . $now['mday'] . '-' . $now['mon'] . '-' . $now ['year'];
?>