<?php
	$dollars = $_POST['dollars'];
	$rate = $_POST['rate'];
	$euros = $dollars * $rate;
	echo "$dollars USD is equivalent to: $euros EUR";
?>