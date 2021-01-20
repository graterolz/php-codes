<?php
	// create directory pointer
	$dp = opendir('.') or die ('ERROR: Cannot open directory');
	// read directory contents
	// print file names found
	while ($file = readdir($dp)) {
		if ($file != '.' && $file != '..') {
			echo "$file \n";
		}
	}
	// destroy directory pointer
	closedir($dp);
?>