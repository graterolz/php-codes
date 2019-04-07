<?php
	// define array
	$profile = array(
		"fname" => "Susan",
		"lname" => "Doe",
		"sex" => "female",
		"sector" => "Asset Management"
	);
	// sort by value
	// output: ('sector' => 'Asset Management',
	//	'lname' => 'Doe',
	//	'fname' => 'Susan',
	//	'sex' => 'female')
	asort($profile);
	print_r($profile);
?>