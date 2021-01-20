<?php
	$arr = array(23,45,2,67,17,12,5,68,14,78,192,4);
	foreach ($arr as $n) {
		echo ($n < 15) ? "$n " : null;
	}
?>