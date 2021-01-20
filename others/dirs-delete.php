<?php
	// function definition
	// remove all files in a directory
	function removeDir($dir) {
		if (file_exists($dir)) {
			// create directory pointer
			$dp = opendir($dir) or die ('ERROR: Cannot open directory');
			// read directory contents
			// delete files found
			// call itself recursively if directories found
			while ($file = readdir($dp)) {
				if ($file != '.' && $file != '..') {
					if (is_file("$dir/$file")) {
						unlink("$dir/$file");
					}
					else if (is_dir("$dir/$file")) {
						removeDir("$dir/$file");
					}
				}
			}
			// close directory pointer
			// remove now-empty directory
			closedir($dp);
			if (rmdir($dir)) {
				return true;
			}
			else {
				return false;
			}
		}
	}
	// delete directory and all children
	if (file_exists('mydir')) {
		if (removeDir('mydir')) {
			echo 'Directory successfully removed.';
		}
		else {
			echo 'ERROR: Directory could not be removed.';
		}
	}
	else {
		echo 'ERROR: Directory does not exist.';
	}
?>