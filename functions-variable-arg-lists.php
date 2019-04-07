<?php
	// function definition
	// calculate average of supplied values
	function calcAverage() {
		$args = func_get_args();
		$count = func_num_args();
		$sum = array_sum($args);
		$avg = $sum / $count;
		return $avg;
	}
	// function invocation
	// with 3 arguments
	// output: 6
	echo calcAverage(3,6,9);
	// function invocation
	// with 8 arguments
	// output: 150
	echo calcAverage(100,200,100,300,50,150,250,50);
?>