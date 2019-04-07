<?php
	// strip HTML tags from string
	// output: 'Please log in again'
	$html = '<div width="200">Please <strong>log in again</strong></div>';
	echo strip_tags($html);
?>