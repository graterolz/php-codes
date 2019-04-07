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
	//
	class DateSelect {
		public $day;
		public $month;
		public $year;
		//
		public function __construct() {
			// create day list
			$this->day = new Select;
			$this->day->setName('dd');
			$this->day->setLabel('Day');
			foreach (range(1,31) as $d) {
				$this->day->setOption(new Option($d,$d));
			}
			// create month list
			$this->month = new Select;
			$this->month->setName('mm');
			$this->month->setLabel('Month');
			foreach (range(1,12) as $m) {
				$mon = date('F', mktime(0,0,0,$m));
				$this->month->setOption(new Option($mon,$mon));
			}
			// create year list
			$this->year = new Select;
			$this->year->setName('yy');
			$this->year->setLabel('Year');
			foreach (range(1950,2050) as $y) {
				$this->year->setOption(new Option($y,$y));
			}
		}
		//
		public function render() {
			$this->day->render(); 
			echo '<br />';
			$this->month->render();
			echo '<br />';
			$this->year->render();
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title></title>
	</head>
	<body>
		<?php
			// if form not yet submitted
			// display form
			if (!isset($_POST['submit'])) {
		?>
		<form method="post" action="date.php">
			<?php
				$datebox = new DateSelect;
				$datebox->render();
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