<html>
	<head>
		<title>Actualizar Cursos</title>
	</head>
	<body>
	<?php
		$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión");
		mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
		$registros=mysql_query("Select * From Cursos Where Codigo='$_REQUEST[Codigo]'",$conexion) or die("Problemas en el select: ".mysql_error());
		if ($reg=mysql_fetch_array($registros)) {
	?>
	<form action="form_update_cursos3.php" method="post">
		Ingrese nuevo nombre del curso: 
		<input type="text" name="nombrenuevo" value="<?php echo $reg['NombreCur'] ?>">
		<br>
		<input type="hidden" name="nombreviejo" value="<?php echo $reg['NombreCur'] ?>">
		<input type="submit" value="Modificar">
	</form>
	<?php
		}
		else
			echo "No existe curso con dicho código";
	?>
	</body>
</html>