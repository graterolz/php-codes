<?php
	// function definition
	// break a string into words
	// reverse and return as an array
	function reverseMe($sentence) {
		$words = explode(' ', $sentence);
		foreach ($words as $k => $v) {
			$words[$k] = strrev($v);
		}
		return $words;
	}
	// function invocation
	// output: 'evaH a doog yad'
	echo implode(' ', reverseMe('Have a good day'));
	// function invocation
	// output: 'lliW uoy yrram em'
	echo implode(' ', reverseMe('Will you marry me'));
?>