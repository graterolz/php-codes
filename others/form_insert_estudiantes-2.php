<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	$registros=mysql_query("Select Codigo,NombreCur From Cursos",$conexion) or die("Problemas en el select: ".mysql_error());
	while ($reg=mysql_fetch_array($registros))
		echo '<input type="radio" name="cursos" value="'.$reg['Codigo'].'" > '.$reg['NombreCur'].' <br>';
?>