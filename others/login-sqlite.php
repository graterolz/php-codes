<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 7-4: Building A Login Form</title>
	</head>
	<body>
		<h2>Project 7-4: Building A Login Form</h2>
		<?php
			// if form not yet submitted
			// display form
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="login-sqlite.php">
			Username: <br />
			<input type="text" name="username" />
			<p>
				Password: <br />
				<input type="password" name="password" />
			<p>
				<input type="submit" name="submit" value="Log In" />
		</form>
		<?php
			// if form submitted
			// check supplied login credentials 
			// against database
			}
			else {
				$username = $_POST['username'];
				$password = $_POST['password'];
				// check input
				if (empty($username)) {
					die('ERROR: Please enter your username');
				}
				if (empty($password)) {
					die('ERROR: Please enter your password');
				}
				// attempt database connection
				try {
					$pdo = new PDO('sqlite:app.db');
				}
				catch (PDOException $e) {
					die("ERROR: Could not connect: " . $e->getMessage());
				}
				// escape special characters in input
				$username = $pdo->quote($username);
				// check if usernames exists
				$sql = "SELECT COUNT(*) FROM users WHERE username = $username";
				if ($result = $pdo->query($sql)) {
					$row = $result->fetch();
					// if yes, fetch the encrypted password
					if ($row[0] == 1) {
						$sql = "SELECT password FROM users WHERE username = $username";
						// encrypt the password entered into the form
						// test it against the encrypted password stored in the database
						// if the two match, the password is correct
						if ($result = $pdo->query($sql)) {
							$row = $result->fetch();
							$salt = $row[0];
							if (crypt($password, $salt) == $salt) {
								echo 'Your login credentials were successfully verified.';
							}
							else {
								echo 'You entered an incorrect password.';
							}
						}
						else {
							echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
						}
					}
					else {
						echo 'You entered an incorrect username.';
					}
				}
				else {
					echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
				}
				// close connection
				unset($pdo);
			}
		?>
	</body>
</html>