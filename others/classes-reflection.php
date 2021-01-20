<?php
	// class definition
	class Automobile {
		// properties
		public $color;
		public $make;
		public $speed = 55;
		// methods
		public function accelerate() {
			$this->speed += 10;
			echo 'Accelerating to ' . $this->speed . '...';
		}
		//
		public function brake() {
			$this->speed -= 10;
			echo 'Slowing down to ' . $this->speed . '...';
		}
		//
		public function turn() {
			$this->brake();
			echo 'Turning...';
			$this->accelerate();
		}
	}
	// instantiate object
	$car = new Automobile;
	// reflection for classes and objects
	Reflection::export(new ReflectionClass('Automobile'));
	Reflection::export(new ReflectionObject($car));
?>