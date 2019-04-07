<?php
	// test if string is empty
	// output: true
	$str = '';
	echo (boolean) empty($str);
	// output: true
	$str = null;
	echo (boolean) empty($str);
	// output: true
	$str = '0';
	echo (boolean) empty($str);
	// output: true
	unset($str);
	echo (boolean)empty($str);
?>