<?php
	// function definition
	// print names of files in a directory
	// and its child directories
	function printDir($dir, $depthStr='+') {
		if (file_exists($dir)) {
		// create directory pointer
			$dp = opendir($dir) or die ('ERROR: Cannot open directory');
			// read directory contents
			// print names of files found
			// call itself recursively if directories found
			while ($file = readdir($dp)) {
				if ($file != '.' && $file != '..') {
					echo "$depthStr $dir/$file \n";
					if (is_dir("$dir/$file")) {
						printDir("$dir/$file", $depthStr.'+');
					}
				}
			}
			// close directory pointer
			closedir($dp);
		}
	}
	// print contents of directory 
	// and all children
	if (file_exists('.')) {
		echo '<pre>';
		printDir('../../../../');
		echo '<pre>';
	}
?>