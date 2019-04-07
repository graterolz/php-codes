<?php
	// custom error handler
	// prints a stack trace if an error occurs
	function myHandler($type, $msg) {
		debug_print_backtrace();
		exit();
	}
	//
	class Page {
		public function __construct($num1, $num2) {
			$ex = new Example($num1, $num2);
		}
	}
	//
	class Example {
		public function __construct($a, $b) {
			$this->a = $a+1;
			$this->b = $b-1;
			$this->run();
		}
		//
		public function run() {
			return $this->a/$this->b;
		}
	}
	//
	set_error_handler('myHandler');
	$page = new Page(10,1);
	echo 'Code execution successful';
?>