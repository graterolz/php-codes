<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión.");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos.");
	mysql_query("Delete From Cursos") or die("Problemas en el select: ".mysql_error());
	echo "Se efectuó el borrado de todos los cursos.";
	mysql_close($conexion);
?>