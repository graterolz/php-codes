<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	mysql_query("Insert Into Alumnos(Nombre,Mail,CodigoCurso) Values ('$_REQUEST[Nombre]','$_REQUEST[Mail]',$_REQUEST[CodigoCurso])",$conexion) or die("Problemas en el select: ".mysql_error());
	mysql_close($conexion);
	echo "El alumno fue dado de alta.";
?>