<?php
	// function definition
	// copy a directory and its contents
	function copyTree($source, $destination) {
		if (file_exists($source)) {
		// create source pointer
			$dp = opendir($source) or die ('ERROR: Cannot open directory');
			// if destination directory does not exist
			// create it
			if (!file_exists($destination)) {
				mkdir($destination) or die('ERROR: Cannot create directory ' . $destination);      
			}
			// read source contents
			// if file, copy to destination
			// if directory, call recursively
			while ($file = readdir($dp)) {
				if ($file != '.' && $file != '..') {
					if (is_file("$source/$file")) {
						copy("$source/$file", "$destination/$file") or die('ERROR: Cannot copy file ' . "$source/$file");
					}
					else if (is_dir("$source/$file")) {
						copyTree("$source/$file", "$destination/$file");
					}
				}
			}
			// close source pointer
			closedir($dp);
		}
	}
	//
	if (file_exists('mydir')) {
		copyTree('mydir', '../../../mycopy');
		echo 'File(s) copied.';
	}
?>