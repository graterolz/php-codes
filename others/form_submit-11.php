<?php
	if($_REQUEST['radio1']=="suma") {
		$suma = $_REQUEST['valor1']+$_REQUEST['valor2'];
		echo "La suma es: ".$suma;
	}
	elseif($_REQUEST['radio1']=="resta") {
		$resta = $_REQUEST['valor1']-$_REQUEST['valor2'];
		echo "La resta es: ".$resta;
	}
?>