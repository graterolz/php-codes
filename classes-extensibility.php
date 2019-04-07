<?php
	// parent class definition
	class Mammal {
		public $age;
		//
		public function __construct() {
			echo 'Creating a new ' . get_class($this) . '...';
		}
		//
		public function setAge($age) {
			$this->age = $age;
		}
		//
		public function getAge() {
			return $this->age;
		}
		//
		public function grow() {
			$this->age += 4;
		}
	}
	// child class definition
	class Human extends Mammal {
		public $name;
		//
		public function __construct() {
			parent::__construct();
		}
		//
		public function setName($name) {
			$this->name = $name;
		}
		//
		public function getName() {
			return $this->name;
		}
		//
		public function grow() {
			$this->age += 1;
			echo 'Growing...';
		}
	}
	// create instance of child class
	// output: 'Creating a new Human...'
	$baby = new Human;
	$baby->setAge(1);
	$baby->setName('Tonka');
	// output: 'Tonka is now 1 year(s) old.'
	echo $baby->getName() . ' is now ' . $baby->getAge() . ' year(s) old...';
	$baby->grow();
	$baby->grow();
	// output: 'Tonka is now 3 years old.'
	echo $baby->getName() . ' is now ' . $baby->getAge() . ' year(s) old.';
?>