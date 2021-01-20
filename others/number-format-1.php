<?php
	// format number (with defaults)
	// output: 1,106,483
	$num = 1106482.5843;
	echo number_format($num);
	// format number (with custom separators)
	// output: 1?106?482*584
	echo number_format($num,3,'*','?');
?>