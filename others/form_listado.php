<?php
	$conexion=mysql_connect("localhost","root","")or die("Problemas en la conexión");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
	$registros=mysql_query("Select codigo,nombre,mail,codigocurso From alumnos",$conexion) or die("Problemas en el selec: ".mysql_error());
	while ($reg=mysql_fetch_array($registros)) {
		echo "Código: ".$reg['codigo']."<br>";
		echo "Nombre: ".$reg['nombre']."<br>";
		echo "Mail: ".$reg['mail']."<br>";
		echo "Curso: ";
		switch ($reg['codigocurso']) {
			case "1": echo "PHP";
				break;
			case "2": echo "ASP";
				break;
			case "3": echo "JSP";
				break;
		}
		echo "<br>";
		echo "<br>";
	}
	mysql_close($conexion);
?>