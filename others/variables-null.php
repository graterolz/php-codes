<?php
	// assign value to variable
	$car = 'Porsche';
	// print variable value
	// output: 'Before unset(), my car is a Porsche'
	echo "Before unset(), my car is a $car";
	// assign empty value to variable
	$car = null;
	// print variable value
	// output: 'After unset(), my car is a '
	echo "After unset(), my car is a $car";
?>