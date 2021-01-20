<?php
	// format as decimal number 
	// output: 00065
	printf("%05d", 65);
	// format as floating-point number 
	// output: 00239.000
	printf("%09.3f", 239);
	// format as octal number 
	// output: 10
	printf("%4o", 8);
	// format number
	// incorporate into string
	// output: 'I see 8 apples and 26.00 oranges'
	printf("I see %4d apples and %4.2f oranges", 8, 26);
?>