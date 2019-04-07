<?php
	$count = 0;
	// loop 5 times
	while ($count <= 4) {
		$count++;
		// when the counter hits 3
		// break out of the loop
		if ($count == 3) {
			break;
		}
		echo "This is iteration #$count <br/>";
	}
?>