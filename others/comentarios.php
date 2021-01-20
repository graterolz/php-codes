<?php
	include('gral.php');
	// Verificación de si se ha dado click en la opción de cerrar sesión
	$logout = trim($_GET['logout']);
	if ($logout != '') {
		$_SESSION['userlogon'] = 0;
		$_SESSION['userid'] = 0;
		$_SESSION['username'] = '';
	}
?>
<html>
	<head>
		<title>Comentarios</title>
	</head>
	<body>
	<?php 
		// Para centrar contenido en pantalla del usuario
		echo '<table border="0" width="100%"><tr><td align="center" >';
		echo '<table width="950"><tr><td width="100%">';
		echo '<h1>COMENTARIOS</h1><hr/>';
		// Opciones de agregar comentario e iniciar sesión
		// Si ya hay sesión de usuario abierta, entonces se muestra
		// el enlace a cerrar sesión y a la administración de comentarios
		echo '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td>';
		echo '<td align="left"><a href="i_comentario.php">Agregar comentario</a></td>';
		echo '<td align="right">';
		if ($_SESSION['userlogon'] == 0) {
			echo '<a href="sys_userlogin.php">Iniciar sesi&oacute;n</a>';
		}
		else {
			echo '<table border="0"><tr align="right">';
			echo '<td><a href="comentarios_admin.php">Administraci&oacute;n de comentarios</a></td>';
			echo '<td>&nbsp;</td>';
			echo '<td><a href="comentarios.php?logout=1">Cerrar sesi&oacute;n</a></td>';
			echo '</tr></table>';
		}
		echo '</td>';
		echo '</tr></table>';
		echo '<hr />';
		
		// Se abre la conexión. En caso de error se muestra el mensaje y se detiene la ejecución de la rutina
		$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die('ERROR: No se connecto a la base de datos.');
		// Se crea la base de datos y la tabla de ejemplos si no existe
		// Esta misma función "selecciona" la base de datos de trabajo
		init_example_database($db);
		// Se hace la consulta a la tabla ordenado descendentemente por fecha
		$qry = 'select Id_Comentario as Id, Firma, Comentario, FRegistro';
		$qry .= ' from ex3_comentario';
		$qry .= ' where Id_Estado = 2';
		$qry .= ' order by FRegistro desc';
		$result = mysql_query($qry, $db);
		// Se inicia la tabla HTML y se ponen los encabezados de columna
		echo '<table border="1" width="100%">';
		// Se muestran los nombres de columna como encabezados en la tabla
		echo '<tr>';
		$i = 0;
		while ($i < mysql_num_fields($result)) {
			$meta = mysql_fetch_field($result, $i);
			if (!$meta) echo '<td>[No se pudo leer el dato]</td>'; 
			else echo '<td>'.$meta->name.'</td>';
			$i++;
		}
		echo '</tr>';
		// Se muestran los registros existentes en la tabla	
		$nrows = 0;
		while ($row = mysql_fetch_row($result)) {
			$nrows++;
			echo '<tr>';
			foreach ($row as $aux) {
				if ($aux == NULL) $aux = '&nbsp;';
				echo '<td>'.$aux.'</td>';
			}
			echo '</tr>';
		}
		// Se finaliza la tabla	
		echo '</table>';
		// Se libera la memoria del resultado y se cierra la conexión 
		mysql_free_result($result); 
		mysql_close($db);
		// Cierre de tabla de centrado de contenido
		echo '</td></tr></table></td></tr></table>';
	?>
	</body>
</html>