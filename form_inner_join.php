<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexi�n");
	mysql_select_db("phpfacil",$conexion) or die("Problemas en la selecci�n de la base de datos");
	$cadSQL="Select alu.Codigo as Codigo,Nombre,Mail,CodigoCurso,NombreCur From Alumnos As alu Inner Join Cursos As cur On cur.Codigo=alu.CodigoCurso";
	$registros=mysql_query($cadSQL,$conexion) or die("Problemas en el select: ".mysql_error());
	while($reg=mysql_fetch_array($registros)) {
		echo "Codigo: ".$reg['Codigo']."<br>";
		echo "Nombre: ".$reg['Nombre']."<br>";
		echo "Mail: ".$reg['Mail']."<br>";
		echo "Curso: ".$reg['NombreCur']."<br>"; 
	}
	mysql_close($conexion);
?>