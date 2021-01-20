<?php
	// function definition
	// read a block of lines from a file
	function readBlock($file, $start=1, $lines=null) {
		// open file
		$fp = fopen($file, 'r') or die('ERROR: Cannot find file');
		// initialize counters
		$linesScanned = 1;
		$linesRead = 0;
		$out = '';
		// loop until end of file
		while (!feof($fp)) {
			// get each line
			$line = fgets($fp);
			// if start position is reached
			// append line to output variable
			if ($linesScanned >= $start) {
				$out .= $line;
				$linesRead++;
				// if max number of lines is defined and reached
				// break out of loop
				if (!is_null($linesRead) && $linesRead == ($lines)) {
					break;
				}
			}
			$linesScanned++;
		}
		return $out;
	}
	echo readBlock('example.txt', 3, 4);
?>