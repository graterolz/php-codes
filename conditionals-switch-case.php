<?php
	// handle multiple possibilities
	// define a different message for each day
	$today = 'Tuesday';
	switch ($today) {
		case 'Monday': 
			echo 'Monday\'s child is fair of face.';
			break;
		case 'Tuesday': 
			echo 'Tuesday\'s child is full of grace.';
			break;
		case 'Wednesday':
			echo 'Wednesday\'s child is full of woe.';
			break;
		case 'Thursday': 
			echo 'Thursday\'s child has far to go.';
			break;
		case 'Friday': 
			echo 'Friday\'s child is loving and giving.';
			break;
		case 'Saturday': 
			echo 'Saturday\'s child works hard for a living.';
			break;
		default:
			echo 'No information available for that day';
			break;
	}
?>