<?php
	// for employees with annual comp <= $15000
	// those with a rating >= 3 get a $5000 bonus
	// everyone else gets a $3000 bonus
	if ($rating >= 3) {
		if ($salary < 15000) {
			$salary += 5000;
		}
	}
	else {
		if ($salary < 15000) {
			$salary += 3000;
		}
	}
?>