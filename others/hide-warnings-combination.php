<?php
	// only display notices and fatal errors
	error_reporting(E_NOTICE | E_ERROR);
	echo $var;	// notice
	echo 45/0;	// warning
	echo someFunc();	// fatal
?>
