<?php
	// open and lock file
	// write string to file
	// unlock and close file
	$data = "A fish \n out of \n water\n";
	$fp = fopen('output.txt', 'w') or die('ERROR: Cannot open file');
	flock($fp, LOCK_EX) or die ('ERROR: Cannot lock file');
	fwrite($fp, $data) or die ('ERROR: Cannot write file');
	flock($fp, LOCK_UN) or die ('ERROR: Cannot unlock file');
	fclose($fp);
	echo 'Data written to file';
?>