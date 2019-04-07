<html>
	<head>
		<title>Listado de Trabajadores</title>
	</head>
	<body>
		<h1>Listado de Trabajadores</h1>
		<table>
			<tr><th>Cedula</th><th>Apellido(s)</th><th>Nombre(s)</th></tr>
			<?php foreach ($trabajadores as $trabajador) : ?>
			<tr>
				<td><?php echo $trabajador['cedula'] ?></td>
				<td><?php echo $trabajador['apellidos'] ?></td>
				<td><?php echo $trabajador['nombres'] ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>