<?php
	class Daddy {
		public function talk() {
			echo get_class($this);
		}
	}
	//
	class Baby extends Daddy {
		public function play() {
			parent::talk();
		}
	}
	//
	$a = new Baby;
	$a->play();
?>