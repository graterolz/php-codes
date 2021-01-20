<?php
	// create new directory
	if (!file_exists('mydir')) {
		if (mkdir('mydir')) {
			echo 'Directory successfully created.';
		}
		else {
			echo 'ERROR: Directory could not be created.';
		}
	}
	else {
		echo 'ERROR: Directory already exists.';
	}
?>