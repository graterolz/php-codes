<?php
	$str = '<div>
		<form action="http://www.evildomain.com/evilscript.php">
		<input type="hidden" name="op" value="add" />
		<input type="hidden" name="user" value="me" />
		<input type="hidden" name="pass" value="guessme" />
		</form>
	';
	// using strip_tags()
	$sanitized['str'] = strip_tags($str);
	// using htmlentities()
	$sanitized['str'] = htmlentities($str);
?>