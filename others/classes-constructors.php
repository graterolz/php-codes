<?php
	// define class
	class Machine {
		// constructor
		function __construct() {
			echo "Starting up...\n";
		}
		// destructor
		function __destruct() {
			echo "Shutting down...\n";
		}
	}
	// create an object
	// output: "Starting up..." 
	$m = new Machine();
	// then destroy it
	// output: "Shutting down..."
	unset($m);
?>