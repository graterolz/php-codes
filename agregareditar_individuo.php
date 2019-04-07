<?php
	include('gral.php');
	// 0-> mostrar formulario y no mostrar mensaje 
	// 1-> mensaje de �xito
	// 2-> mensaje de error
	$flagshow = 0;
	// 1-> Agregar
	// 2-> Editar
	$flag = $_GET['flag'];
	$idr = $_GET['idr'];	// ID de registro
	// URL para auto-llamada del archivo
	$auxurl = 'agregareditar_individuo.php?flag='.$flag.'&idr='.$idr;
	// Inicializaci�n de variables
	$nombres = '';
	$apellido1 = '';
	$apellido2 = '';
	$auxerror = '';
	// Si se reciben datos del formulario al dar click en el bot�n "Enviar"
	if ($_POST) {
		// Valores recibidos a variables
		$nombres = trim($_POST['txtnombres']);
		$apellido1 = trim($_POST['txtapellido1']);
		$apellido2 = trim($_POST['txtapellido2']);
		// Verificaci�n de datos recibidos:
		// Los nombres y el primer apellido no pueden ser valores vac�os
		if ($nombres == '') $auxerror = $auxerror.'<li>Debe indicar un nombre.</li>';
		if ($apellido1 == '') $auxerror = $auxerror.'<li>Debe indicar el primer apellido.</li>';
		// Si la verificaci�n tiene incidencias, se muestran
		if ($auxerror != '') $auxerror = '<br>Antes de guardar:<br><ul>'.$auxerror.'</ul>';
		else {
			$qry = '';
			switch ($flag){
				case 1:
					$qry = 'insert into individuo (nombres, apellido1, apellido2) values (';
					$qry .= ms_scm($nombres).', ';
					$qry .= ms_scm($apellido1).', ';
					$qry .= ms_scm($apellido2).')';
					break;
				case 2:
					$qry = 'update individuo set nombres = '.ms_scm($nombres).', ';
					$qry .= 'apellido1 = '.ms_scm($apellido1).', ';
					$qry .= 'apellido2 = '.ms_scm($apellido2).' ';
					$qry .= ' where id_individuo = '.$idr;
					break;
			}
			// Se abre la conexi�n
			$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die('ERROR: No se connecto a la base de datos.');
			// Se selecciona la base de datos
			mysql_select_db($dbname)or die('ERROR:'.mysql_error());
			// Se ejecuta el comando
			$result = mysql_query($qry, $db);
			// Se marca la bandera para saber si la ejecuci�n tuvo �xito o no
			if ($result) $flagshow = 1; else $flagshow = 2;
			// Se cierra la conexi�n
			mysql_close($db);
		}
	}
	else {
		if ($flag == 2) {
			// Se abre la conexi�n
			$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die('ERROR: No se connecto a la base de datos.');
			// Se selecciona la base de datos
			mysql_select_db($dbname)or die('ERROR:'.mysql_error());
			// Se ejecuta la consulta y se asigna el resultado a las variables
			$qry = 'select nombres, apellido1, apellido2 from individuo where id_individuo = '.$idr;
			$result = mysql_query($qry, $db);
			$row = mysql_fetch_array($result);
			$nombres = $row[0];
			$apellido1 = $row[1];
			$apellido2 = $row[2];
			// Se libera la memoria del resultado y se cierra la conexi�n 
			mysql_free_result($result);
			mysql_close($db);
		}
	}
?>
<html>
	<head>
		<title>
			<?php 
				// El t�tulo depende de si se est� agregando o editando un individuo
				if ($flag == 1) echo 'Agregar individuo'; else echo 'Editar individuo';
			?>
		</title>
	</head>
	<body>
		<?php
			// Seg�n la bandera, se muestra el formulario o un mensaje de �xito o error
			switch($flagshow) {
				case 0:
					echo $auxerror; ?>
					<form id="form1" name="form1" method="post" action="<?=$auxurl?>">
						<table width="100%" border="0">
							<tr>
								<td width="13%">ID:</td>
								<?php
									if ($flag == 1) echo '<td width="87%">(Individuo nuevo)</td>';
									else echo '<td width="87%">'.$idr.'</td>';
								?>
							</tr>
							<tr>
							<td>Nombres:</td>
								<td width="87%"><input type="text" name="txtnombres" value="<?=$nombres?>" /></td>
							</tr>
							<tr>
								<td>Primer apellido: </td>
								<td width="87%"><input type="text" name="txtapellido1" value="<?=$apellido1?>"/></td>
							</tr>
							<tr>
								<td>Segundo apellido: </td>
								<td width="87%"><input type="text" name="txtapellido2" value="<?=$apellido2?>"/></td></tr>
							<tr>
								<td colspan="2"><input type="submit" name="Submit" value="Enviar"/></td>
							</tr>
						</table>
					</form>
					<?php
					break;
				case 1:
					if ($flag == 1) echo 'Registro insertado en la base de datos';
					else echo 'Registro actualizado en la base de datos';
					echo '<BR><HR><a href="individuos.php">Volver</a>';
					break;
				case 2:
					if ($flag == 1) echo 'Error al insertar registro en la base de datos';
					else echo 'Error al actualizar base de datos';
					echo '<BR><HR><a href="individuos.php">Volver</a>';
					break;
			}
		?>
	</body>
</html>