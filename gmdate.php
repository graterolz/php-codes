<?php
	// muestra el GTM relativo a 'now'
	echo gmdate('H:i:s d-M-Y', mktime());
	echo "<br>";
	// muestra el GMT relativo a '18:01 30-Nov-2007'
	// datos de salida: '00:01:00 01-Dec-2007'
	echo gmdate('H:i:s d-M-y',mktime(18,1,0,11,30,2007));
?>