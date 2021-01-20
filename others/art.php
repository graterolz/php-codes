<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 10-2: Validating Form Input</title>
		<style type="text/css">
		div.success {
			width:200px;
			padding:5px;
			border:solid 1px black;
			color:green;
		}
		div.error {
			width:400px;
			padding:5px;
			border:solid 1px black;
			color:red;
		}
		</style>
	</head>
	<body>
		<h2>Project 10-2: Validating Form Input</h2>
		<h3 style="background-color: silver">Purchase Fine Art</h2>
		<?php
			// if form not yet submitted
			// display form
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="art.php">
			Artist: <br />
			<select name="artist">
				<option value="">--select one--</option>
				<option value="Picasso">Picasso</option>
				<option value="Van Gogh">van Gogh</option>
				<option value="Chagall">Chagall</option>
				<option value="Degas">Degas</option>
				<option value="Monet">Monet</option>
				<option value="Matisse">Matisse</option>
			</select>
			<p>
			Medium: <br />
			<select name="medium">
				<option value="">--select one--</option>
				<option value="oil">Oil</option>
				<option value="watercolor">Watercolor</option>
				<option value="ink">Ink</option>
			</select>
			<p>
			Price between: <br />
			<input type="text" size="4" name="min"/> and <input type="text" size="5" name="max"/>
			<p>
			Email address: <br />
			<input type="text" size="25" name="email"/>
			<p>
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
			// if form submitted
			// process form input
			} else {
				error_reporting(E_ERROR);
				// define exception classes
				class InputException extends Exception { }
				class LogicalException extends Exception { }
				class MailException extends Exception { }
				// get form input
				$artist = $_POST['artist'];
				$medium = $_POST['medium'];
				$min = $_POST['min'];
				$max = $_POST['max'];
				$email = $_POST['email'];
				try {
					// validate form input
					if (empty($artist)) {
						throw new InputException('Artist');
					}
					if (empty($medium)) {
						throw new InputException('Medium');
					}
					if (empty($email)) {
						throw new InputException('Email address');
					}
					if (empty($min) || empty($max) || (int)$min <= 0 || (int)$max <= 0) {
						throw new InputException('Price');
					}
					if ($max < $min) {
						throw new LogicalException('Maximum price cannot be less than minimum price');
					}
					// send email with selection
					$subject = 'Purchase order';
					$to = $email;
					$from = $email;
					$body = "
						ORDER DETAILS: \r\n\r\n
						Artist: $artist \r\n
						Medium: $medium \r\n
						Price: Between $min and $max \r\n
					";
					if (!mail($to, $subject, $body, "From:$from")) {
						throw new MailException($to);
					}
					// print success message
					echo '<div class="success">SUCCESS: Order processed!</div>';
				}
				catch (InputException $e) {
					echo '<div class="error">ERROR: Please provide a valid value for the field marked \'' . $e->getMessage() . '\'</div>';
					exit();
				}
				catch (LogicalException $e) {
					echo '<div class="error">ERROR: '. $e->getMessage() . '</div>';
					exit();
				}
				catch (MailException $e) {
					echo '<div class="error">ERROR: Unable to deliver email message</div>';
					file_put_contents('error.log', '[' . date("d-M-Y h:i:s", mktime()) . '] Mail delivery error to: ' . $e->getMessage() . "\n", FILE_APPEND);
					exit();
				}
				catch (Exception $e) {
					echo '<div class="error">'. $e->getMessage() . ' on line ' . $e->getLine() . '</div>';
					exit();
				}
			}
		?>
	</body>
</html>