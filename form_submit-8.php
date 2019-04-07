<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas con la conexión");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	mysql_query("insert into alumnos(nombre,mail,codigocurso) values ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])",$conexion) or die("Problemas en el select".mysql_error());
	mysql_close($conexion); 
	echo "El alumno fue dado de alta."; 
?>