<?php
	// function to validate a US postal code
	// test if input is of the form ddddd-dddd
	function validatePostalCode($str) {
		return preg_match("/^\d{5}(-\d{4})?$/" ,$str);
	}
?>