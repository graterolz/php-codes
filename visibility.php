<?php
	class Daddy {
		private function talk() {}
	}
	//
	class Baby extends Daddy {
		function play() {
			parent::talk();
		}
	}
	$a = new Baby;
	$a->play();
?>