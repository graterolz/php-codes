<?php
	// function definition
	// change the value of $score
	function changeScore() {
		global $score;
		$score = 25;
	}
	// define a variable in the main progra
	// print its value
	$score = 11;
	echo 'Score is: ' . $score;	// output: 11
	// run the changeScore() function
	changeScore();
	// print $score again
	echo 'Score is: ' . $score;	// output: 25
?>