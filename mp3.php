<?php
	// initialize an iterator
	// pass it the directory to be processed
	$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("music/"));
	// iterate over the directory
	// get ID3 tag information for each file
	foreach ($iterator as $key=>$value) {
		$tag = id3_get_tag(realpath($key));
		echo trim($tag['artist']) . ' - ' . trim($tag['title']);
		echo "<br/>";
	}
?>