<?php include('gral.php'); ?>
<html>
	<head>
		<title>Inicio de sesi&oacute;n</title>
	</head>
<?php
	$auxmsg = '';
	if ($_POST) {
		// Se marca la bandera de login como falsa
		$_SESSION['userlogon'] = 0;
		$_SESSION['userid'] = 0;
		$_SESSION['username'] = '';
		// Valores recibidos a variables
		$usuario = trim($_POST['txtuser']);
		$password = trim($_POST['txtpassword']);
		// Se verifica que los valores no sean vacíos
		if ($usuario == '') $auxmsg .= '<li>Usuario inválido</li>';
		if ($password == '') $auxmsg .= '<li>Clave inválida</li>';
		// Si no son vacíos, entonces se verifica contra la bd
		if ($auxmsg == '') {
			// Se abre la conexión
			$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die('ERROR: No se connecto a la base de datos.');
			// Se selecciona la base de datos
			mysql_select_db($dbname)or die('ERROR:'.mysql_error());
			// Se ejecuta el comando
			$qry = 'select Id_Usuario, Usuario, Clave from ex3_usuario where usuario = '.ms_scm($usuario);
			$result = mysql_query($qry, $db);
			// Si no hay resultado, el usuario no existe
			if (!($row = mysql_fetch_row($result))) {
				$auxmsg .= '<li>El usuario no existe</li>';
			}
			else {
				// Se verifica contraseña
				if ($row[2] != md5($password)) $auxmsg .= '<li>Contrase&ntilde;a incorrecta</li>';
				else {
					$_SESSION['userlogon'] = 1;
					$_SESSION['userid'] = $row[0];
					$_SESSION['username'] = $row[1];
				}
			}
			// Se marca la bandera para saber si la ejecución tuvo éxito o no
			if ($result) $flagshow = 1; else $flagshow = 2;
			// Se cierra la conexión
			mysql_close($db);
		}
		if ($auxmsg != '') $auxmsg = '<ul>'.$auxmsg.'</ul><br/><hr/>';
	}
?>
	<body>
		<h1>Inicio de sesi&oacute;n</h1>
		<?=$auxmsg?>
		<form id="form1" name="form1" method="post" action="sys_userlogin.php">
			<table border="0">
				<?php
					if ($_SESSION['userlogon'] == 0) {
				?>
				<tr>
					<td>Usuario:</td>
					<td><input 	type="text" name="txtuser" value="<?=$usuario?>" style="width:230px;"/></td>
				</tr>
				<tr>
					<td>Contrase&ntilde;a:</td>
					<td><input 	type="password" name="txtpassword" value="<?=$password?>" 	style="width:230px;"/></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="Submit" value="Login" style="width:235px;"/></td>
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td colspan="2">
					<p>
						<i>Por si acaso no leyeron la p&aacute;gina donde publiqu&eacute; este<br/>
						ejemplo, el usuario es &quot;admin&quot; y la contrase&ntilde;a es &quot;1234&quot;<br/>
						<br/>
						Atte.,
						<br/>
						<br/>
						PCID</i>
					</p>
					</td>
				</tr>
				<?php
					}
					else
						echo '<tr><td>&nbsp;</td><td>Bienvenido '.$_SESSION['username'].'</td></tr>';
				?>
				<tr>
					<td colspan="2" align="left">
						<hr/>
						<a href="comentarios.php">Ir a consulta p&uacute;blica de comentarios</a>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>