<?php
	// define variables
	$count = 7;
	$age = 60;
	$greeting = 'We';
	// subtract 2 and re-assign new value to variable
	// equivalent to $count = $count - 2
	// output: 9
	$count -= 2;
	echo $count;
	// subtract 2 and re-assign new value to variable
	// equivalent to $age = $age / 5
	// output: 9
	$age /= 5;
	echo $age;
	// add new string and re-assign new value to variable
	// equivalent to $greeting = $greeting . 'lcome!'
	// output: 'Welcome!'
	$greeting .= 'lcome!';
	echo $greeting;
?>