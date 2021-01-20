<?php
	// define array
	$profile = array(
		"fname" => "Susan",
		"lname" => "Doe",
		"sex" => "female",
		"sector" => "Asset Management"
	);
	// sort by key
	// output: ('fname' => 'Susan',
	//	'lname' => 'Doe',
	//	'sector' => 'Asset Management',
	//	'sex' => 'female')
	ksort($profile);
	print_r($profile);
?>