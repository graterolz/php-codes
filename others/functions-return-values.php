<?php
	// function definition
	// calculate perimeter of rectangle
	// p = 2 * (l+w)
	function getPerimeter($length, $width) {
		$perimeter = 2 * ($length + $width);
		return $perimeter;
	}
	// function invocation
	// with arguments
	echo 'The perimeter of a rectangle of length 4 units and width 2 units is: ' . getPerimeter(4,2) . ' units';
?>