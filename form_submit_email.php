<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	$registros=mysql_query("Select codigo,nombre,codigocurso From alumnos Where mail='$_REQUEST[mail]'",$conexion) or die("Problemas en el select: ".mysql_error());
	if($reg=mysql_fetch_array($registros)) {
		echo "Nombre: ".$reg['nombre']."<br>";
		echo "Curso: ";
		switch ($reg['codigocurso']) {
			case 1: echo "PHP";
				break;
			case 2: echo "ASP";
				break;
			case 3: echo "JSP";
				break;
		}
	}
	else
		echo "No existe un alumno con ese email";
	mysql_close($conexion);
?>