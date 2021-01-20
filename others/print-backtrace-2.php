<?php
	// custom error handler
	// prints a stack trace if an error occurs
	function myHandler($type, $msg, $file, $line, $context) {
		global $debug;
		$debug->error($msg);
		echo '
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<title>Error Page</title>
				<link rel="stylesheet" type="text/css" href="./PHP_Debug-1.0.0/css/html_table.css" />
			</head>
			<body>';
		$debug->display();
		echo '</body></html>';
		exit();
	}
	// add debug hooks to classes and functions
	class Page {
		public function __construct($num1, $num2) {
			global $debug;
			$debug->add('Entering Page::__construct');
			$debug->dump($this);
			$debug->dump(func_get_args(), 'method args');
			$ex = new Example($num1, $num2);
		}
	}
	//
	class Example {
		public function __construct($a, $b) {
			global $debug;
			$debug->add('Entering Example::__construct');
			$debug->dump($this);
			$debug->dump(func_get_args(), 'method args');
			$this->a = $a+1;
			$this->b = $b-1;
			$this->run();
		}
		//
		public function run() {
			global $debug;
			$debug->add('Entering Example::run');
			$debug->dump($this);
			$debug->dump(func_get_args(), 'method args');
			return $this->a/$this->b;
		}
	}
	// configure and read PHP_Debug files
	ini_set('include_path', './PHP_Debug-1.0.0/;');
	include 'PHP_Debug-1.0.0/PHP/Debug.php';
	include 'PHP_Debug-1.0.0/PHP/Debug/Renderer/HTML/TableConfig.php';
	$options = array(
		'render_type' => 'HTML',
		'render_mode' => 'Table',
		'replace_errorhandler' => false,
	);
	$debug = new PHP_Debug($options);
	set_error_handler('myHandler');
	// start running code
	$page = new Page(10,1);
	echo 'Code execution successful';
?>
