<?php
	// Conectar con la base de datos y seleccionarla
	$conexion = mysql_connect('localhost','root','');
	mysql_select_db('db_ejemplo',$conexion);
	// Ejecutar la consulta SQL
	$resultado = mysql_query('SELECT cedula,apellidos,nombres FROM trabajadores',$conexion);
?>
<html>
<head>
	<title>Listado de Trabajadores</title>
</head>
	<body>
		<h1>Listado de Trabajadores</h1>
		<table>
			<tr><th>Cedula</th><th>Apellido(s)</th><th>Nombre(s)</th></tr>
			<?php
				// Mostrar los resultados con HTML
				while ($fila = mysql_fetch_array($resultado,MYSQL_ASSOC)) {
					echo "\t<tr>\n";
					printf("<td>%s</td>", $fila['cedula']);
					printf("<td>%s</td>", $fila['apellidos']);
					printf("<td>%s</td>", $fila['nombres']);
					echo "\t<tr>\n";
				}
			?>
		</table>
	</body>
</html>
<?php
	//cerrar la conexion
	mysql_close($conexion);
?>