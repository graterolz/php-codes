<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	$registros=mysql_query("Select codigo,nombre,codigocurso From alumnos Where mail='$_REQUEST[mail]'",$conexion) or die("Problemas en el select: ".mysql_error());
	if($reg=mysql_fetch_array($registros)) {
		mysql_query("Delete From Alumnos Where mail='$_REQUEST[mail]'",$conexion) or die("Problemas en el select: ".mysql_error());
		echo "Se efectuó el borrado del alumno con dicho email.";
	}
	else
		echo "No existe un alumno con ese email";
	mysql_close($conexion);
?>