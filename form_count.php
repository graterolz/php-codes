<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión.");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	$registros=mysql_query("Select Count(*) as Cantidad From Alumnos",$conexion) or die("Problemas en el select: ".mysql_error());
	$reg=mysql_fetch_array($registros);
	echo "La cantidad de alumnos inscritos son: ".$reg['Cantidad'];
?>