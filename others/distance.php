<?php
	function getDistance($speed, $time) {
		return $speed * $time;
	}
	// time diff = 4.5 hrs
	// total time in the air = 13-5 - 4.5 = 9
	echo 'The distance between Bombay and London is: ' . getDistance(910, 9) . ' km.';
?>