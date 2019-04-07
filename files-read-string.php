<?php
	// read file into string
	$str = file_get_contents('example.txt') or die('ERROR: Cannot find file');
	echo $str;
?>