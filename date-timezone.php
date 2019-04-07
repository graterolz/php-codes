<?php
	// returns GMT time relative to 'now'
	echo gmdate('H:i:s d-M-Y', mktime());
	// returns GMT time relative to '00:01 1-Dec-2007'
	// output: '18:31:00 30-Nov-2007'
	echo gmdate('H:i:s d-M-Y', mktime(0,1,0,12,1,2007));
?>