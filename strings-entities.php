<?php
	// replace with HTML entities
	// output: '&lt;div width=&quot;200&quot;&gt;
	// This is a div&lt;/div&gt;'
	$html = '<div width="200">This is a div</div>';
	echo htmlentities($html);
	// replace line breaks with <br/>s
	// output: 'This is a bro<br />
	// ken line'
	$lines = 'This is a bro
				ken line';
	echo nl2br($lines);
?>