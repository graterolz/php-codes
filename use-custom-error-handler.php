<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title></title>
		<style type="text/css">
			.notice {
				font-weight: bolder;
				color: purple;
			}
			.warning {
				font-weight: bolder;
				font-size: larger;
				color: red;
			}
		</style>
	</head>
	<body>
		<?php
			// divert errors to custom error handler
			set_error_handler('myHandler');
			// report all errors
			error_reporting(E_ALL);
			// generate some errors
			echo $var;	// notice
			echo 23/0;	// warning
			// custom error handler
			function myHandler($type, $msg, $file, $line, $context) {
				$text = "An error occurred on line $line while processing your request.<p>
				Please visit our <a href=http://www.domain.dom>home page</a> and try again.";
				switch($type) {
					case E_NOTICE:
						echo "<div class=\"notice\">$text</div><p>";
						break;
					case E_WARNING:
						echo "<div class=\"warning\">$text</div><p>";
						break;
				}
			}
		?>
	</body>
</html>