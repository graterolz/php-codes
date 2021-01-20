<?php
	// replace '@' with 'at'
	// output: 'john at domain.net'
	$str = 'john@domain.net';
	echo str_replace('@', ' at ', $str);
?>