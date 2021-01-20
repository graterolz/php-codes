<?php
	echo "El nombre es: ".$_REQUEST['nombre'];
	echo "<br>";
	if($_REQUEST['radio1']=="NTE")
		echo "No tiene estudios";
	elseif($_REQUEST['radio1']=="EP")
		echo "Tiene estudios primarios";
	elseif($_REQUEST['radio1']=="ES")
		echo "Tiene estudios secundarios";	
?>