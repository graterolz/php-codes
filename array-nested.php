<?php
	// define nested array
	$phonebook = array(
		array(
			'name' => 'Raymond Rabbit',
			'tel' => '1234567',
			'email' => 'ray@bunnyplanet.in',
		),
		array(
			'name' => 'David Duck',
			'tel' => '8562904',
			'email' => 'dduck@duckpond.corp',
		),
		array(
			'name' => 'Harold Horse',
			'tel' => '5942033',
			'email' => 'kingharold@farmersmarket.horsestuff.com',
		)
	);
	// access nested value
	echo "David Duck's number is: " . $phonebook[1]['tel'];
?>