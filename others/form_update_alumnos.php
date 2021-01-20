<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	$registros=mysql_query("Update Alumnos Set Mail='$_REQUEST[mailnuevo]' Where Mail='$_REQUEST[mailviejo]'",$conexion) or die("Problemas en el select: ".mysql_error());
	echo "El mail fue modificado con exito.";
?>