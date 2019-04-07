<?php
	$a = 5;
	$b = &$a;
	echo "a vale $a"."<br>";
	echo "b vale $b"."<br>";
	$b = $b + 3;
	echo "a vale $a"."<br>";
	echo "b vale $b"."<br>";
?>