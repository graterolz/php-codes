<?php
	// class tree
	class Mammal {
		public $name;
		protected $age;
		private $species;
	}
	//
	class Human extends Mammal {}
	//
	$mammal = new Mammal;
	$mammal->name = 'William';	// ok
	$mammal->age = 3;			// fatal error
	$mammal->species = 'Whale';	// fatal error
	$human = new Human;
	$human->name = 'Barry';		// ok
	$human->age = 1;			// fatal error
	$human->species = 'Boy';	// undefined
?>