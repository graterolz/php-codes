<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexi�n");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selecci�n de la base de datos");
	$registros=mysql_query("Update Cursos Set NombreCur='$_REQUEST[nombrenuevo]' Where NombreCur='$_REQUEST[nombreviejo]'",$conexion) or die("Problemas en el select: ".mysql_error());
	echo "El nombre del curso fue modificado con exito.";			 
?>