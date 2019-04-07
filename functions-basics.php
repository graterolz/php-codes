<?php
	// function definition
	// print today's weekday name
	function whatIsToday() {
		echo "Today is " . date('l', mktime());
	}
	// function invocation
	whatIsToday();
?>