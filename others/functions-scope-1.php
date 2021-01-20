<?php
	// function definition
	// change the value of $score
	function changeScore() {
		$score = 25;
	}
	// define a variable in the main program
	// print its value
	$score = 11;
	echo 'Score is: ' . $score;	// output: 11
	// run the changeScore() function
	changeScore();
	// print $score again
	echo 'Score is: ' . $score;	// output: 11
?>