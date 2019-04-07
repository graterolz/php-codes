<?php
	// class tree
	class Vertebrate {}
	//
	class Mammal extends Vertebrate {}
	//
	class Human extends Mammal {}
	//
	$baby = new Human;
	// output: true
	echo ($baby instanceof Vertebrate) ? 'true' : 'false';
?>