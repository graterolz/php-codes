<?php
	echo "El nombre ingresado es: ";
	echo $_REQUEST['nombre'];
	echo "<br>";
	if($_REQUEST['edad']>=18)
		echo "Ud. es mayor de edad";
?>