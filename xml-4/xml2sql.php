<?php
	// load XML file
	$xml = simplexml_load_file('inventory.xml') or die ("Unable to load XML!");
	// loop over XML <item> elements
	// access child nodes and interpolate with SQL statement
	foreach ($xml as $item) {
		echo "INSERT INTO items (sku, name, price) VALUES ('" . addslashes($item['sku']) . "','" . addslashes($item->name) . "','" . addslashes($item->price) . "');\n";
	}
?>