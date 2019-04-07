<?php
	// output: '12 Nov 07'
	echo date('d M y', strtotime('now'));
	// output: '13 Nov 07'
	echo date('d M y', strtotime('tomorrow'));
	// output: '16 Nov 07'
	echo date('d M y', strtotime('next Friday'));
	// output: '10 Nov 07'
	echo date('d M y', strtotime('48 hours ago'));
?>