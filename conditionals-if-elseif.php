<?php
	// handle multiple possibilities
	// define a different message for each day
	$today = 'Tuesday';
	if ($today == 'Monday') {
		echo 'Monday\'s child is fair of face.';
	}
	elseif ($today == 'Tuesday') {
		echo 'Tuesday\'s child is full of grace.';
	}
	elseif ($today == 'Wednesday') {
		echo 'Wednesday\'s child is full of woe.';
	}
	elseif ($today == 'Thursday') {
		echo 'Thursday\'s child has far to go.';
	}
	elseif ($today == 'Friday') {
		echo 'Friday\'s child is loving and giving.';
	}
	elseif ($today == 'Saturday') {
		echo 'Saturday\'s child works hard for a living.';
	}
	else {
		echo 'No information available for that day';
	}
?>