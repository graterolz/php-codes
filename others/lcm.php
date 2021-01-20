<?php
	// function definition
	// get GCF of two numbers
	function getGCF($a, $b) {
		if ($b == 0) {
			return $a;
		}
		else {
			return getGCF($b, $a % $b);
		}
	}
	// function definition
	// get LCM of two numbers using GCF
	function getLCM($a, $b) {
		return ($a * $b) / getGCF($a, $b);
	}
	// function definition
	// get LCM of arbitrary set of numbers using GCF
	function getLCMOfSet() {
		$nums = func_get_args();
		if (count($nums) < 2) {
			die('ERROR: You must provide at least 2 values');
		}
		$lcm = 1;
		for ($x=0; $x<count($nums); $x++) {
			$lcm = getLCM($lcm, $nums[$x]);
		}
		return $lcm;
	}
	// output: 160
	echo getLCMOfSet(4,8,16,32,10);
?>