<?php
	// compare strings
	$a = "hello";
	$b = "hello";
	$c = "hEllo";
	// output: 0
	echo strcmp($a, $b);
	// output: 1
	echo strcmp($a, $c);
?>