<?php
	// read file into array (chunks)
	$str = '';
	$fp = fopen('http://www.google.com', 'r') or die('ERROR: Cannot open file');
	if ($fp) {
		while (!feof($fp)) {
			$str .= fgets($fp,512);
		}
		fclose($fp);
		echo $str;
	}
?>