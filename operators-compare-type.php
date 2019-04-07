<?php
	// define variables of two types 
	// but with the same value
	$bool = (boolean) 1;
	$int = (integer) 1;
	// returns true
	echo ($bool == $int);
	// returns false
	echo ($bool === $int);
?>