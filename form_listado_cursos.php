<?php
	$conexion=mysql_connect("localhost","root","")or die("Problemas en la conexi�n");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selecci�n de la base de datos");
	$registros=mysql_query("Select codigo,nombrecur From Cursos",$conexion) or die("Problemas en el selec: ".mysql_error());
	while ($reg=mysql_fetch_array($registros)) {
		echo "C�digo: ".$reg['codigo']."<br>";
		echo "Nombre: ".$reg['nombrecur']."<br>";
		echo "<br>";
	}
	mysql_close($conexion);
?>