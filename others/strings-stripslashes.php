<?php
	// remove slashes
	// output: 'John D'Souza says "Catch you later".'
	$str = "John D\'Souza says \"Catch you later\".";
	echo stripslashes($str);
?>