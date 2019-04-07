<?php
	// class definition
	class Element {
		private $name;
		private $value;
		private $label;
		// constructor
		public function __construct() {}
		// method: set element 'name'
		public function setName($name) {
			$this->name = $name;
		}
		// method: get element 'name'
		public function getName() {
			return $this->name;
		}
		// method: set element value
		public function setValue($value) {
			$this->value = $value;
		}
		// method: get element value
		public function getValue() {
			return $this->value;
		}
		// method: set English-language element label
		public function setLabel($label) {
			$this->label = $label;
		}
		// method: get element label
		public function getLabel() {
			return $this->label;
		}
	}
	// child class definition
	class Option extends Element {
		// constructor
		public function __construct($value='', $label='') {
			parent::__construct();
			$this->setValue($value);
			$this->setLabel($label);
		}
		// method: output HTML for <option> elements
		public function render() {
			echo "<option value=\"" . $this->getValue() . "\">" . $this->getLabel() . "</option>\n"; 
		}
	}
	// child class definition
	class Select extends Element {
		protected $options;
		// constructor
		public function __construct() {
			parent::__construct();
			$this->options = array();
		}
		// method: add an option to the list
		public function setOption($option) {
			$this->options[] = $option;
		}
		// method: return all options for the list as array
		private function getOptions() {
			return (array)$this->options;
		}
		// method: output HTML code for <select> element
		public function render() {
			echo $this->getLabel() . ": <br />\n";
			echo "<select name=\"" . $this->getName() . "\">\n"; 
			foreach ($this->getOptions() as $opt) {
				echo $opt->render();
			}
			echo "</select>"; 
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 5-3: Generating Form Selection Lists</title>
	</head>
	<body>
		<h2>Project 5-3: Generating Form Selection Lists</h2>
		<?php
			// if form not yet submitted
			// display form
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="select.php">
			<?php
				// generate selection list #1
				$fruits = new Select();
				$fruits->setLabel('Fruits');
				$fruits->setName('fruit_sel');
				$fruits->setOption(new Option('Oranges', 'Oranges'));
				$fruits->setOption(new Option('Strawberries', 'Strawberries'));
				$fruits->setOption(new Option('Pineapples', 'Pineapples'));
				$fruits->setOption(new Option('Bananas', 'Bananas'));
				$fruits->render();
			?>
			<p />
			<?php
				// generate selection list #2
				$metals = new Select();
				$metals->setLabel('Metals');
				$metals->setName('metal_sel');
				$metals->setOption(new Option('Iron', 'Iron'));
				$metals->setOption(new Option('Silver', 'Silver'));
				$metals->setOption(new Option('Gold', 'Gold'));
				$metals->setOption(new Option('Platinum', 'Platinum'));
				$metals->render();
			?>
			<p />
			<?php
				// generate selection list #3
				$animals = new Select();
				$animals->setLabel('Animals');
				$animals->setName('animal_sel');
				$animals->setOption(new Option('Lion', 'Lion'));
				$animals->setOption(new Option('Hyena', 'Hyena'));
				$animals->setOption(new Option('Fox', 'Fox'));
				$animals->render();
			?>
			<p />
			<input type="submit" name="submit" value="Submit" />
		</form>
		<?php
			// if form submitted
			// process form input
			}
			else {
				var_dump($_POST);
			}
		?>
	</body>
</html>