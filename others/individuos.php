<?php
	include('gral.php');
?>
<html>
	<head>
		<title>Individuos</title>
	</head>
	<body>
		<a href="agregareditar_individuo.php?flag=1&idr=0">Agregar individuo</a>
		<br />
		<hr />
	<?php 
		// Se abre la conexión. En caso de error se muestra el mensaje y se detiene la ejecución de la rutina
		$db = mysql_connect($dbhost, $dbuser, $dbpassword) or die('ERROR: No se connecto a la base de datos.');
		// Se crea la base de datos y la tabla de ejemplos si no existe
		// Esta misma función "selecciona" la base de datos de trabajo
		init_example_database();
		// Se hace la consulta a la tabla "individuo"
		$qry = 'select * from individuo';
		$result = mysql_query($qry, $db);
		// Se inicia la tabla HTML y se ponen los encabezados de columna
		echo '<table border="1" width="100%">';
		echo '<tr>';
		echo '<td>ID</td>';
		echo '<td>Nombres</td>';
		echo '<td>Primer apellido</td>';
		echo '<td>Segundo apellido</td>';
		echo '<td>&nbsp;</td>';
		echo '<td>&nbsp;</td>';
		echo '</tr>';
		// Se muestran los registros existentes en la tabla "individuo"
		while($row = mysql_fetch_array($result)) {
			// Se inicia la fila de la tabla HTML
			echo '<tr>';
			$aux = '';
			// Se agregan los datos por registro
			for ($i = 0; $i <= 3; $i++) {
				if ($row[$i] == NULL) $aux .= '<td>&nbsp;</td>';
				else $aux .= '<td>'.$row[$i].'</td>';
			}
			// Se agregan las opciones de "Editar" y "Eliminar" por cada registro
			// poniendo el valor de la llave primaria por referencia
			$aux .= '<td><a href="agregareditar_individuo.php?flag=2&idr='.$row[0].'">Editar</a></td>';
			$aux .= '<td><a href="eliminar_individuo.php?idr='.$row[0].'">Eliminar</a></td>';
			// Se finaliza la línea de la tabla HTML y se muestra
			$aux .= '</tr>';
			echo $aux;
		}
		// Se finaliza la tabla	
		echo '</table>';
		// Se libera la memoria del resultado y se cierra la conexión 
		mysql_free_result($result); 
		mysql_close($db);
	?>
	</body>
</html>