<?php
	// class definition
	class Automobile {
		// properties
		public $color;
		public $make;
		// methods
		public function accelerate() {
			echo 'Accelerating...';
		}
		//
		public function brake() {
			echo 'Slowing down...';
		}
		//
		public function turn() {
			echo 'Turning...';
		}
	}
	// instantiate object
	$car = new Automobile;
	// set object properties
	$car->color = 'red';
	$car->make = 'Ford Taurus';
	// invoke object methods
	$car->accelerate();
	$car->turn();
?>