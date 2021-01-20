<?php
	// output: 'Date is invalid'
	if (checkdate(2,30,2008)) {
		echo 'Date is valid';
	}
	else {
		echo 'Date is invalid';
	}
?>