<?php
	// read file into array
	$arr = file('example.txt') or die('ERROR: Cannot find file');
	foreach ($arr as $line) {
		echo $line;
	}
?>