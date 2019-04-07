<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	$registros=mysql_query("Select codigo,nombrecur From cursos Where nombrecur='$_REQUEST[nombrecur]'",$conexion) or die("Problemas en el select: ".mysql_error());
	if($reg=mysql_fetch_array($registros)) {
		mysql_query("Delete From Cursos Where nombrecur='$_REQUEST[nombrecur]'",$conexion) or die("Problemas en el select: ".mysql_error());
		echo "Se efectuó el borrado del curso con dicho nombre y/o descripción.";
	}
	else
		echo "No existe un curso con ese nombre y/o descripción";
	mysql_close($conexion);
?>