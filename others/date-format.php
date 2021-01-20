<?php
	// output: "It is now 12:28 pm 20 Mar 2008"
	echo 'It is now ' . date("h:i a d M Y", mktime(12,28,13,3,20,2008));
	// output: "It is now 8:15 14 Feb 2008"
	echo 'It is now ' . date("H:i d F Y", mktime(8,15,0,2,14,2008));
	// output: "Today's date is Oct-05-2007"
	echo 'Today\'s date is ' . date("M-d-Y", mktime(0,0,0,10,5,2007));
?>