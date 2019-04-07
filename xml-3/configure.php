<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 8-5: Reading And Writing XML Configuration Files</title>
	</head>
	<body>
		<h2>Project 8-5: Reading And Writing XML Configuration Files</h2>
		<h3 style="background-color: silver">Oven Configuration</h2>
		<?php
			// define configuration file name and path
			$configFile = 'config.xml';
			// if form not yet submitted
			// display form
			if (!isset($_POST['submit'])) {
				// set up array with default parameters
				$data = array();
				$data['mode'] = null;
				$data['temperature'] = null;
				$data['duration'] = null;
				$data['direction'] = null;
				$data['autooff'] = null;
				// read current configuration values
				// use them to pre-fill the form
				if (file_exists($configFile)) {
					$doc = new DOMDocument();
					$doc->preserveWhiteSpace = false;
					$doc->load($configFile);
					$oven = $doc->getElementsByTagName('oven');
					foreach ($oven->item(0)->childNodes as $node) {
						$data[$node->nodeName] = $node->nodeValue;
					}
				}
		?>
		<form method="post" action="configure.php">
			Mode: <br />
			<select name="data[mode]">
				<option value="grill" <?php echo ($data['mode'] == 'grill') ? 'selected' : null; ?>>Grill</option>
				<option value="bake" <?php echo ($data['mode'] == 'bake') ? 'selected' : null; ?>>Bake</option>
				<option value="toast" <?php echo ($data['mode'] == 'toast') ? 'selected' : null; ?>>Toast</option>
			</select>
			<p>
				Temperature: <br />
				<input type="text" size="2" name="data[temperature]" value="<?php echo $data['temperature']; ?>"/>
			<p>
				Duration (minutes): <br />
				<input type="text" size="2" name="data[duration]" value="<?php echo $data['duration']; ?>"/>
			<p>
				Heat source and direction: <br />
				<input type="radio" name="data[direction]" value="top-down" <?php echo ($data['direction'] == 'top-down') ? 'checked' : null; ?>>Top, downwards</input>
				<input type="radio" name="data[direction]" value="bottom-up" <?php echo ($data['direction'] == 'bottom-up') ? 'checked' : null; ?>>Bottom, upwards</input>
				<input type="radio" name="data[direction]" value="both" <?php echo ($data['direction'] == 'both') ? 'checked' : null; ?>>Both</input>
			<p>
				Automatically power off when done: 
				<input type="checkbox" name="data[autooff]" value="yes" <?php echo ($data['autooff'] == 'yes') ? 'checked' : null; ?>/>
			<p>
				<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
			// if form submitted
			// process form input
			}
			else {
				// read submitted data
				$config = $_POST['data'];
				// validate submitted data as necessary
				if ((trim($config['temperature']) == '') || (trim($config['temperature']) != '' && (int)$config['temperature'] <= 0)) {
					die('ERROR: Please enter a valid oven temperature'); 
				}
				if ((trim($config['duration']) == '') || (trim($config['duration']) != '' && (int)$config['duration'] <= 0)) {
					die('ERROR: Please enter a valid duration'); 
				}
				// generate new XML document
				$doc = new DOMDocument();
				// create and attach root element <configuration> 
				$root = $doc->createElement('configuration');
				$configuration = $doc->appendChild($root);
				// create and attach <oven> element under <schedule>
				$oven = $doc->createElement('oven');
				$configuration->appendChild($oven);
				// write each configuration value to the file
				foreach ($config as $key => $value) {
					if (trim($value) != '') {
						$elem = $doc->createElement($key);
						$text = $doc->createTextNode($value);
						$oven->appendChild($elem);
						$elem->appendChild($text);
					}
				}
				// format XML output
				// save XML file
				$doc->formatOutput = true;
				$doc->save($configFile) or die('ERROR: Cannot write configuration file');
				echo 'Configuration data successfully written to file.';
			}
		?>
	</body>
</html>