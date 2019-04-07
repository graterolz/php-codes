<?php
	include('gral.php');
	// Verificación de si se ha dado click en la opción de cerrar sesión
	$logout = trim($_GET['logout']);
	$msgbyebye = '';
	if ($logout != '') {
		// Si había una sesión abierta, entonces se mostrará un mensaje
		// de despedida
		if ($_SESSION['userlogon'] == 1) {
			$msgbyebye = '&iexcl;'.'Hasta luego '.$_SESSION['username'].'!';
		}
		// Se marca la bandera de login como falsa
		$_SESSION['userlogon'] = 0;
		$_SESSION['userid'] = 0;
		$_SESSION['username'] = '';
	}
?>

<html>
	<head>
		<title>Comentarios -Administraci&oacute;n-</title>
	</head>
	<body>
	<?php 
		// Para centrar contenido en pantalla del usuario
		echo '<table border="0" width="100%"><tr><td align="center" >';
		echo '<table width="950"><tr><td width="100%">';
		$lbladmin = '<span style="font-size:x-small; margin-top:0">';
		$lbladmin .= '-ADMINISTRACION-</span>';
		echo '<h1>COMENTARIOS '.$lbladmin.'</h1><hr/>';
		// Se verifica que exista un login de usuario
		if ($_SESSION['userlogon'] == 0) {
			// Si se está haciendo un cierre de sesión se muestra el 
			// mensaje de despedida y si no el que informa que debe
			// iniciar sesión para acceder a la administración de
			// comentarios
			if ($msgbyebye != '') echo $msgbyebye;
			else echo 'Necesita iniciar sesi&oacute;n para acceder a esta opci&oacute;n';
			// Enlaces a inicio de sesión y a consulta pública de comentarios
			echo '<br/><br/>';
			echo '<a href="comentarios.php">Ir a consulta de comentarios</a>';
			echo '<br/><br/>';
			echo '<a href="sys_userlogin.php">Iniciar sesi&oacute;n</a>';
			// Cierre de la tabla de centra de contenido, del body y del html
			echo '</td></tr></table></td></tr></table>';
			echo '</body>';
			echo '</html>';
			// Se abandona la ejecución del php
			return;
		}
		// Lectura de parámetros
		$filtroestado = trim($_GET['filtroestado']);
		$accion = trim($_GET['accion']); 
		$rowid = trim($_GET['rowid']);
		// Asignación de valores por omisión si no llegaron parámetros
		if ($accion == '') $accion = 0;
		if ($rowid == '') $rowid = 0;
		if ($filtroestado == '') $filtroestado = 0;
		// Se abre la conexión. En caso de error se muestra el mensaje y se detiene la ejecución de la rutina
		$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die('ERROR: No se connecto a la base de datos.');
		// Se crea la base de datos y la tabla de ejemplos si no existe
		// Esta misma función "selecciona" la base de datos de trabajo
		init_example_database($db);
		// Si se ha dado click sobre validar/invalidar un comentario
		// se tomarán acciones en la base de datos antes de hacer la
		// consulta
		if (($accion != 0) && ($rowid != 0)) {
			switch($accion) {
				// Validar
				case 1:
					$qry = 'update ex3_comentario set Id_Estado = 2';
					$qry .= ' where Id_Comentario = '.$rowid;
					break;
				// Invalidar
				case 2:
					$qry = 'update ex3_comentario set Id_Estado = 3';
					$qry .= ' where Id_Comentario = '.$rowid;
					break;
				default: $qry = '';
			}
			if ($qry != '') mysql_query($qry, $db);
		}
		// Se muestran las opciones de filtro por estado a la izquierda
		// y el filtro aplicado si es el caso a la derecha de la fila
		// de una tabla
		echo '<table width="100%" border="0"><tr><td align="left">';
		$filtroaplicado = 'Sin filtro';
		echo '<table border="0"><tr align="left"><td>Filtrar por estado:</td>';
		$qry = 'select Id_Estado, Descripcion from ex3_estado';
		$result = mysql_query($qry, $db);
		while ($row = mysql_fetch_row($result)){
			echo '<td>';
			echo '<a href="?filtroestado='.$row[0].'">&quot;'.$row[1].'&quot;</a>';
			echo '</td><td>&nbsp;</td>';
			if ($filtroestado != 0) 
				if ($filtroestado == $row[0]) $filtroaplicado = 'Filtro: Estado = '.$row[1];
		}
		$filtroaplicado = '<span style="font-size:small">'.$filtroaplicado.'</span>';
		// Para tener opción "sin filtro"
		echo '<td><a href="?filtroestado=0">&quot;Sin filtro&quot;</a>'; 
		echo '</tr></table>';
		mysql_free_result($result); 
		echo '</td>';
		echo '<td>|</td>';
		echo '<td align="center"><a href="comentarios.php">Ir a consulta p&uacute;blica</a></td>';
		echo '<td>|</td>';
		echo '<td align="center"><a href="comentarios_admin.php?logout=1">Cerrar sesi&oacute;n</a></td>';
		echo '<td>|</td>';
		echo '<td align="right"><span style'.$filtroaplicado.'</td>';
		echo '</tr></table>';
		// Se hace la consulta a la tabla ordenando descendentemente por fecha
		$qry = 'select a.Id_Comentario as Id, a.Firma, a.Comentario, a.FRegistro,';
		$qry .= ' b.Descripcion as Estado';
		$qry .= ' from ex3_comentario a';
		$qry .= ' inner join ex3_estado b on b.Id_Estado = a.Id_Estado';
		// Si hay opción de filtro seleccionada entonces se aplica:
		if ($filtroestado != 0) $qry .= ' where a.Id_Estado = '.$filtroestado;
		$qry .= ' order by a.FRegistro desc';
		$result = mysql_query($qry, $db);
		// Se inicia la tabla HTML y se ponen los encabezados de columna
		echo '<table border="1" width="100%">'; 	
		echo '<tr>';
		$i = 0;
		while ($i < mysql_num_fields($result)) {
			$meta = mysql_fetch_field($result, $i);
			if (!$meta) echo '<td>[No se pudo leer el dato]</td>'; 
			else echo '<td>'.$meta->name.'</td>';
			$i++;
		}
		echo '<td>&nbsp;</td>'; // Columna para poner opciones de validar/invalidar
		echo '</tr>';
		// Se muestran los registros existentes en la tabla	
		$auxlink = '<a href="?';
		if ($filtroestado !=0) $auxlink .= 'filtroestado='.$filtroestado.'&';
		$nrows = 0;
		while ($row = mysql_fetch_row($result)) {
			$nrows++;
			echo '<tr>';
			foreach ($row as $aux) {
				if ($aux == NULL) $aux = '&nbsp;';
				echo '<td>'.$aux.'</td>';
			}
			echo '<td width="100">';
			echo '<table border="0" cellspacing="4"><tr>';
			echo '<td>'.$auxlink.'accion=1&rowid='.$row[0].'">Validar</a></td>';
			echo '<td>'.$auxlink.'accion=2&rowid='.$row[0].'">Invalidar</a></td>';
			echo '</tr></table>';
			echo '</td>';
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