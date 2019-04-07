<?php
	// create directory pointer
	$dp = opendir('.') or die ('ERROR: Cannot open directory');
	// read directory contents
	// add files to array with mtime
	while ($file = readdir($dp)) {
		if ($file != '.' && $file != '..') {
			$fileList[$file] = filemtime($file);
		}
	}
	// destroy directory pointer
	closedir($dp);
	// reverse sort by mtime
	// print list
	arsort($fileList);
	foreach ($fileList as $file => $mtime) {
		echo $file . ' ' . date('d-M-y H:i', $mtime) . "\n";
	}
?>
