<?php
	include('gral.php');
	$idr = $_GET['idr'];	// ID de registro
	// Se abre la conexión
	$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die('ERROR: No se connecto a la base de datos.');
	// Se selecciona la base de datos
	mysql_select_db($dbname)or die('ERROR:'.mysql_error());
	// Se arma el comando
	$qry = 'delete from individuo ';
	$qry .= ' where id_individuo = '.$idr;
	// Se ejecuta el comando
	$result = mysql_query($qry, $db);
	// Se marca la bandera para saber si la ejecución tuvo éxito o no
	if ($result) $flagshow = 1; else $flagshow = 2;
	// Se cierra la conexión
	mysql_close($db);
?>
<html>
	<head>
		<title>Eliminaci&oacute;n de individuo</title>
	</head>
	<body>
		<?php
			// Según la bandera, se muestra el formulario o un mensaje de éxito o error
			if ($flagshow == 1)	echo 'Individuo eliminado de la base de datos';
			else echo 'Error al eliminar individuo de la base de datos';
			echo '<BR><HR><a href="individuos.php">Volver</a>';
		?>
	</body>
</html>