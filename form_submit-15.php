<?php
	echo "Su nombre es: ".$_REQUEST['nombre']."<br>";
	if (isset($_REQUEST['check1']))
		echo "Ud. practica Futbol"."<br>";
	if (isset($_REQUEST['check3']))
		echo "Ud. practica Tennis"."<br>";
	if (isset($_REQUEST['check4']))
		echo "Ud. practica Voley"."<br>";
?>