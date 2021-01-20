<?php
	// read file into array
	$arr = file('http://www.google.com') or die('ERROR: Cannot find file');
	foreach ($arr as $line) {
		echo $line;
	}
?>