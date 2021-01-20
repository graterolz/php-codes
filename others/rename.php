<?php
	// create directory pointer
	$dp = opendir('.') or die ('ERROR: Cannot open directory');
	// read directory contents
	// print file names found
	while ($file = readdir($dp)) {
		$fileData = pathinfo($file);
		if ($fileData['extension'] == 'txt') {
			rename($file, $fileData['filename'] . '.xtx') or die('ERROR: Cannot rename file ' . $file);
		}
	}
	// destroy directory pointer
	closedir($dp);
?>
