<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title></title>
	</head>
	<body>
		<?php
			// if form submitted
			if (isset($_POST['submit'])) {
				// create exceptions
				class InputException extends Exception { }
				class ConnException extends Exception { }
				// get form input
				$host = $_POST['host'];
				$port = $_POST['port'];
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				try {
					// validate form input
					if (empty($host)) {
						throw new InputException('Host name missing');
					}
					if (empty($port)) {
						throw new InputException('Port missing');
					}
					if (empty($user)) {
						throw new InputException('User name missing');
					}
					if (empty($pass)) {
						throw new InputException('Password missing');
					}
					// create object
					require_once 'Net/POP3.php';
					$pop3 =& new Net_POP3();
					// connect to host
					if(PEAR::isError($ret = $pop3->connect($host, $port))){
						throw new ConnException($ret->getMessage());
					}
					// log in
					if(PEAR::isError($ret = $pop3->login($user, $pass, 'USER'))){
						throw new ConnException($ret->getMessage());
					}
					// get number of messages and mailbox size
					echo $pop3->numMsg() . ' message(s) in mailbox, ' . $pop3->getSize() . ' bytes <p/>';
					// get content of most recent message
					if ($pop3->numMsg() > 0) {
						echo '<pre>' . $pop3->getMsg($pop3->numMsg()) . '</pre>';
					}
					// disconnect
					$pop3->disconnect();
				}
				catch(InputException $e) {
					die('Input validation error: ' . $e->getMessage());
				}
				catch(ConnException $e) {
					die('Connection error: Server said ' . $e->getMessage());
				}
				catch(Exception $e) {
					die('ERROR: ' . $e->getMessage());
				}
			}
			else {
		?>
		<form method="post" action="pop3.php">
			Server name: <br />
			<input type="text" size="20" name="host" />
			<p>
			Server port: <br />
			<input type="text" size="4" name="port" value="110" />
			<p>
			User name: <br />
			<input type="text" size="20" name="user" />
			<p>
			Password: <br />
			<input type="password" size="10" name="pass" />
			<p>
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
			}
		?>
	</body>
</html>