<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas con la conexi�n");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selecci�n de la base de datos");
	mysql_query("insert into cursos(nombrecur) values ('$_REQUEST[nombrecur]')",$conexion) or die("Problemas en el select".mysql_error());
	mysql_close($conexion); 
	echo "El curso fue dado de alta."; 
?>