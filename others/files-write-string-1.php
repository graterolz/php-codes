<?php
	// write string to file
	$data = "A fish \n out of \n water\n";
	file_put_contents('output.txt', $data) or die('ERROR: Cannot write file');
	echo 'Data written to file';
?>