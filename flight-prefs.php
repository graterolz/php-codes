<?php
	// if form submitted
	// write cookie with settings
	if (isset($_POST['submit'])) {
		$ret1 = (isset($_POST['name'])) ? setcookie('name', $_POST['name'], mktime() + 36400, '/') : null;
		$ret2 = (isset($_POST['seat'])) ? setcookie('seat', $_POST['seat'], mktime() + 36400, '/') : null;
		$ret3 = (isset($_POST['meal'])) ? setcookie('meal', $_POST['meal'], mktime() + 36400, '/') : null;
		$ret4 = (isset($_POST['offers'])) ? setcookie('offers', implode(',', $_POST['offers']), mktime() + 36400, '/') : null;
	}
	// read cookie and assign cookie values
	// to PHP variables
	$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : '';
	$seat = isset($_COOKIE['seat']) ? $_COOKIE['seat'] : '';
	$meal = isset($_COOKIE['meal']) ? $_COOKIE['meal'] : '';
	$offers = isset($_COOKIE['offers']) ? explode(',',$_COOKIE['offers']) : array();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 9-1: Saving and Restoring User Preferences</title>
	</head>
	<body>
		<h2>Project 9-1: Saving and Restoring User Preferences</h2>
		<h3>Set Your Flight Preferences</h3>
		<?php
			// if form submitted
			// display success message
			if (isset($_POST['submit'])) {
		?>
		Thank you for your submission.
		<?php
			// if form not submitted
			// display form
			}
			else {
		?>
		<form method="post" action="flight-prefs.php">
			Name: <br />
			<input type="text" size="20" name="name" value="<?php echo $name; ?>" />
			<p>
			Seat selection: <br />
			<input type="radio" name="seat" value="aisle" <?php echo ($seat == 'aisle') ? 'checked' : ''; ?>>Aisle</input>
			<input type="radio" name="seat" value="window" <?php echo ($seat == 'window') ? 'checked' : ''; ?>>Window</input>
			<input type="radio" name="seat" value="center" <?php echo ($seat == 'center') ? 'checked' : ''; ?>>Center</input>
			<p>
			Meal selection: <br />
			<input type="radio" name="meal" value="normal-veg" <?php echo ($meal == 'normal-veg') ? 'checked' : ''; ?>>Vegetarian</input>
			<input type="radio" name="meal" value="normal-nveg" <?php echo ($meal == 'normal-nveg') ? 'checked' : ''; ?>>Non-vegetarian</input>
			<input type="radio" name="meal" value="diabetic" <?php echo ($meal == 'diabetic') ? 'checked' : ''; ?>>Diabetic</input>
			<input type="radio" name="meal" value="child" <?php echo ($meal == 'child') ? 'checked' : ''; ?>>Child</input>
			<p>
			I'm interested in special offers on flights from: <br />
			<input type="checkbox" name="offers[]" value="LHR" <?php echo in_array('LHR', $offers) ? 'checked' : ''; ?>>London (Heathrow)</input>
			<input type="checkbox" name="offers[]" value="CDG" <?php echo in_array('CDG', $offers) ? 'checked' : ''; ?>>Paris</input>
			<input type="checkbox" name="offers[]" value="CIA" <?php echo in_array('CIA', $offers) ? 'checked' : ''; ?>>Rome (Ciampino)</input>
			<input type="checkbox" name="offers[]" value="IBZ" <?php echo in_array('IBZ', $offers) ? 'checked' : ''; ?>>Ibiza</input>
			<input type="checkbox" name="offers[]" value="SIN" <?php echo in_array('SIN', $offers) ? 'checked' : ''; ?>>Singapore</input>
			<input type="checkbox" name="offers[]" value="HKG" <?php echo in_array('HKG', $offers) ? 'checked' : ''; ?>>Hong Kong</input>
			<input type="checkbox" name="offers[]" value="MLA" <?php echo in_array('MLA', $offers) ? 'checked' : ''; ?>>Malta</input>
			<input type="checkbox" name="offers[]" value="BOM" <?php echo in_array('BOM', $offers) ? 'checked' : ''; ?>>Bombay</input>
			<p>		
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
			}
		?>
	</body>
</html>