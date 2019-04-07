<?php
	// define string containing date value
	// convert it to UNIX timestamp
	// re-format it using date()
	// output: '07 Jul 08'
	$str = 'July 7 2008';
	echo date('d M y', strtotime($str));
?>