<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexi�n");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selecci�n de la base de datos");
	$registros=mysql_query("Update Alumnos Set CodigoCurso=$_REQUEST[CodigoCurso] Where Mail='$_REQUEST[MailViejo]'",$conexion) or die("Problemas en el select: ".mysql_error());
	echo "El curso fue modificado con �xito";
	mysql_close($conexion);
?>