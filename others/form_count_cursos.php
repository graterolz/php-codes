<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	$cadSQL="Select * From Cursos" ;
	$registros=mysql_query($cadSQL,$conexion) or die("Problemas en el select: ".mysql_error());
	while($reg=mysql_fetch_array($registros)) {
		echo "Codigo: ".$reg['Codigo']."<br>";
		echo "Nombre: ".$reg['NombreCur']."<br>";
	}
	$cadSQL="Select Count(*) As Total From Cursos";
	$registros=mysql_query($cadSQL,$conexion) or die("Problemas en el select: ".mysql_error());
	if($reg=mysql_fetch_array($registros))
		echo "Total de Registros: ".$reg['Total'];
	mysql_close($conexion);
?>