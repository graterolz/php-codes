<?php
	echo "Su nombre es: ".$_REQUEST['nombre']."<br>";
	if($_REQUEST['ingresos']=='>3000')
		echo "Ud. debe pagar impuestos...";
?>