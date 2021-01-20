<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 4-4: Age Calculator</title>
	</head>
	<body>
		<h2>Project 4-4: Age Calculator</h2>
		<?php
			// if form not yet submitted
			// display form
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="agecalc.php">
			Enter your date of birth,in mm/dd/yyyy format: <br />
			<input type="text" name="dob" />
			<p>
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
			// if form submitted
			// process form input
			} else {
				// split date value into components
				$dateArr = explode('/',$_POST['dob']);
				// calculate timestamp corresponding to date value
				$dateTs = strtotime($_POST['dob']);
				// calculate timestamp corresponding to 'today'
				$now = strtotime('today');
				// check that the value entered is in the correct format
				if (sizeof($dateArr) != 3) {
					die('ERROR: Please enter a valid date of birth');
				}
				// check that the value entered is a valid date
				if (!checkdate($dateArr[0],$dateArr[1],$dateArr[2])) {
					die('ERROR: Please enter a valid date of birth');
				}
				// check that the date entered is earlier than 'today'
				if ($dateTs >= $now) {
					die('ERROR: Please enter a date of birth earlier than today');
				}
				// calculate difference between date of birth and today in days
				// convert to years
				// convert remaining days to months
				// print output
				$ageDays = floor(($now - $dateTs) / 86400);
				$ageYears = floor($ageDays / 365);
				$ageMonths = floor(($ageDays - ($ageYears * 365)) / 30);
				echo "You are approximately $ageYears years and $ageMonths months old.";
			}
		?>
	</body>
</html>