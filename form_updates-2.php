<html>
	<head>
		<title>Actualización de dos tablas</title>
	</head>
	<body>
	<?php
		$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexión");
		mysql_select_db("phpfacil",$conexion) or die("Problemas en la selección de la base de datos");
		$registros=mysql_query("Select * From Alumnos Where mail= '$_REQUEST[Mail]'",$conexion) or die("Problemas en el select: ".mysql_error());
		if($regalu=mysql_fetch_array($registros)) {
	?>
	<form action="form_updates3.php" method="post">
		<input type="hidden" name="MailViejo" value="<?php echo $regalu['Mail']?>">
		<select name="CodigoCurso">
		<?php
			$registros=mysql_query("Select * From Cursos",$conexion) or die("Problemas en el select: ".mysql_error());
			while($reg=mysql_fetch_array($registros)) {
				if($regalu['CodigoCurso']==$reg['Codigo'])
					echo "<option value=\"$reg[Codigo]\" selected>$reg[NombreCur]</option>";
				else
					echo "<option value=\"$reg[Codigo]\">$reg[NombreCur]</option>";
			}
		?>
		</select>
		<br>
		<input type="submit" value="Modificar">
	</form>
	<?php
		}
		else
			echo "No existe alumno con dicho mail";
	?>
	</body>
</html>