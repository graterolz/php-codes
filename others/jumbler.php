<?php
	// class definition
	class Jumbler {
		// properties
		public $key;
		// methods
		// set encryption key
		public function setKey($key) {
			$this->key = $key;
		}
		// get encryption key
		public function getKey() {
			return $this->key;
		}
		// encrypt
		public function encrypt($plain) {
			for ($x=0; $x<strlen($plain); $x++) {
				$cipher[] = ord($plain[$x]) + $this->getKey() + ($x * $this->getKey());
			}
			return implode('/', $cipher);
		}
		// decrypt
		public function decrypt($cipher) {
			$data = explode('/', $cipher);
			$plain = '';
			for ($x=0; $x<count($data); $x++) {
				$plain .= chr($data[$x] - $this->getKey() - ($x * $this->getKey()));
			}
			return $plain;
		} 
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 5-2: Encrypting Text</title>
	</head>
	<body>
		<h2>Project 5-2: Encrypting Text</h2>
		<?php
			// if form not yet submitted
			// display form
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="jumbler.php">
			Enter: 
			<input type="radio" name="type" value="P" checked>Plaintext</input>
			<input type="radio" name="type" value="C">Ciphertext </input>
			<br />
			<textarea name="text" rows="6" cols="40" wrap="soft"></textarea>
			<p>
			Enter numeric key: <br />
			<input type="text" name="key" size="6" />
			<p>
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
			// if form submitted
			// process form input
			}
			else {
				$type = $_POST['type'];
				$text = $_POST['text'];
				$key = (int)$_POST['key'];
				// perform encryption or decryption
				// print output
				$j = new Jumbler;
				$j->setKey($key);
				if ($type == 'C') {
					echo $j->decrypt($text);
				}
				else {
					echo $j->encrypt($text);
				}
			}
		?>
	</body>
</html>