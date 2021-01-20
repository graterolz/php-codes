<?php
	// display list of month names
	// output: 'January, February, ... December'
	foreach (range(1,12) as $m) {
		$months[] = date('F', mktime(0,0,0,$m,1,0));
	}
	echo implode($months, ', ');
?>