<?php
	// delete file
	if (file_exists('dummy.txt')) {
		if (unlink('dummy.txt')) {
			echo 'File successfully removed.';
		}
		else {
			echo 'ERROR: File could not be removed.';
		}
	}
	else {
		echo 'ERROR: File does not exist.';
	}
?>