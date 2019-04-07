<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 8-4: Recursively Processing An XML Document</title>
	</head>
	<body>
		<h2>Project 8-4: Recursively Processing An XML Document</h2>
		<pre>
		<?php
			// recursive function to process XML node collection
			function xmlProcess($node, $depthMarker) {
				// process this node's children
				foreach ($node->childNodes as $n) {
					switch ($n->nodeType) {
					// for elements, print element name
						case XML_ELEMENT_NODE:
							echo "$depthMarker <b>$n->nodeName</b> \n";
							// if the element has attributes
							// list their names and values
							if ($n->attributes->length > 0) {
								foreach ($n->attributes as $attr) {
									echo "$depthMarker <i>attr</i>: $attr->name => $attr->value \n";
								}
							}
							break;
						// for text data, print value
						case XML_TEXT_NODE:
							echo "$depthMarker <i>text</i>: \"$n->nodeValue\" \n";
							break;
					}
					// if this node has a further level of sub-nodes
					// increment depth marker
					// run recursively
					if ($n->hasChildNodes()) {
						xmlProcess($n, $depthMarker . DEPTH_CHAR);
					}
				} 
			}
			// end function definition
			// define the character used for indentation
			define ('DEPTH_CHAR', ' ');
			// initialize DOMDocument
			$doc = new DOMDocument();
			// disable whitespace-only text nodes
			$doc->preserveWhiteSpace = false;
			// read XML file
			$doc->load('objects.xml');
			// call recursive function with root element
			xmlProcess($doc->firstChild, DEPTH_CHAR);
		?>
		</pre>
	</body>
</html>