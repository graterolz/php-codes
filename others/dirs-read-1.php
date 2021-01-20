<?php
	// initialize iterator with name of 
	// directory to process
	$dit = new DirectoryIterator('.');

	// loop over directory
	// print names of files found
	while($dit->valid()) {
		if (!$dit->isDot()) {
			echo $dit->getFilename() . "\n";
		}
		$dit->next();
	}
	unset($dit);
?>