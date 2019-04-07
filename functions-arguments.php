<?php
	// function definition
	// calculate perimeter of rectangle
	// p = 2 * (l+w)
	function getPerimeter($length, $width) {
		$perimeter = 2 * ($length + $width);
		echo "The perimeter of a rectangle of length $length units and width $width units is: $perimeter units";
	}
	// function invocation
	// with arguments
	getPerimeter(4,2);
?>