<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 4-3: Prime Number Tester</title>
	</head>
	<body>
		<h2>Project 4-3: Prime Number Tester</h2>
		<?php
			// if form not yet submitted
			// display form
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="primes.php">
			Enter a list of numbers, separated by commas: <br />
			<input type="text" name="num" />
			<p>
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
			// if form submitted
			// process form input
			}
			else {
				// retrieve number from POST submission
				// convert to array by splitting on comma
				$numStr = $_POST['num'];
				$numArr = explode(',', $_POST['num']);
				$primes = array();
				$primeFlag = 0;
				// iterate over array
				// get absolute values of each number
				foreach ($numArr as $n) {
					$n = trim(abs($n));
					// test each number for prime-ness:
					// check the number by dividing it 
					// by all the numbers between 2 and itself
					// if not perfectly divisible by any,
					// number is prime
					for ($i=2; $i<$n; $i++) {
						$primeFlag = 0;
						if (($n%$i) == 0) {
							break;
						}
						$primeFlag = 1;
					}
					// if prime
					// add to output array
					if ($primeFlag == 1) {
						array_push($primes, $n);
					}
				}
				// check if any primes were found
				// if yes, sort and remove duplicates from array
				// print message
				if (count($primes) > 0) {
					$primes = array_unique($primes);
					sort($primes);
					echo 'The following numbers are prime: ' . implode($primes, ' ');
				}
				else {
					echo 'No prime numbers found'; 
				}
			}
		?>
	</body>
</html>