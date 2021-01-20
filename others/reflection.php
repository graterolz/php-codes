<?php
	// reflejo para clase
	Reflection::export(new ReflectionClass('Gato'));
	// reflejo para objeto
	Reflection::export(new ReflectionObject('$miGato'));
?>