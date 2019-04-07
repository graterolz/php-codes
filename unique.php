<?php
	$arr = array(23,45,'apple','fig',17,12,5,'fig',14,2,78,192,45);
	if ($arr == array_unique($arr)) {
		echo 'Array has only unique values';
	}
	else {
		echo 'Array has some duplicate values';
	}
?>