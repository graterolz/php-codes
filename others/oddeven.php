<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 3-1: Odd/Even Number Tester</title>
	</head>
	<body>
		<h2>Project 3-1: Odd/Even Number Tester</h2>
		<?php
			// if form not yet submitted
			// display form
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="oddeven.php">
			Enter value: <br />
			<input type="text" name="num" size="3" />
			<p>
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
			// if form submitted
			// process form input
			}
			else {
				// retrieve number from POST submission
				$num = $_POST['num'];
				// test value for even-ness
				// display appropriate message
				if (($num % 2) == 0) {
					echo 'You entered ' . $num . ', which is an even number.';
				}
				else {
					echo 'You entered ' . $num . ', which is an odd number.';
				}
			}
		?>
	</body>
</html>