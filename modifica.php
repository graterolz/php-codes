<?php
	include("funciones/funciones_mysql.php");
	extract($_POST);
	if(isset($consulta)) {
		// llamar la funcion que conecta con el motor MySQL
		conectar();
		// diseñar la consulta SQL
		$sql = "SELECT * FROM $tabla WHERE nombre LIKE '$nombre'";
		// ejecutar la consulta
		$result = mysql_query($sql);
		echo "<form name='envia_modifica' method='post' action='modifica_registros.php'>";
		echo "<table border=1>";
		// genera el encabezado de la tabla con los resultados
		// cabecera cajeros
		$cab_caj="<tr><td>ID</td><td>Nombre</td><td>Password</td><td>Permisos</td>"."<td>Selecciona</td></tr>";
		// cabecera productos
		$cab_pro = "<tr><td>ID</td><td>Nombre</td><td>Codigo</td><td>Tipo</td><td>Genero</td>".
			"<td>Precio</td><td>Existencia</td><td>Selecciona</td></tr>";
		echo $tabla=="cajeros" ? $cab_caj : $cab_pro;
		// sacar los valores del arreglo
		while($campo=mysql_fetch_array($result)) {
			if($tabla=='cajeros') {
				echo "<tr><td>$campo[id]</td><td><input type='text' name='nombre.$campo[id]' value='$campo[nombre]'/></td>".
				"<td><input type='text' name='pass.$campo[id]' value='$campo[pass]' maxlength='5'/></td>".
				"<td><input text='text' name='permisos.$campo[id]' value='$campo[permisos]'/></td>".
				"<td><input type='checkbox' name='cajeros.$campo[id]' value='$campo[id]' /></td></tr>";
			}
			else {
				echo "<tr><td>$campo[id]</td><td><input type='text' name='nombre.$campo[id]' value='$campo[nombre]'/></td>".
				"<td><input type='text' name='codigo.$campo[id]' value='$campo[codigo]' /></td>".
				"<td><input type='text' name='tipo.$campo[id]' value='$campo[tipo]'/></td>". 
				"<td><input type='text' name='genero.$campo[id]' value='$campo[genero]'/></td>".
				"<td><input type='text' name='precio.$campo[id]' value='$campo[precio]'/></td>".
				"<td><input type='text' name='existencia.$campo[id]' value='$campo[existencia]'/></td>".
				"<td><input type='checkbox' name='productos.$campo[id]' value='$campo[id]'/></td></tr>";
			}
		}
		echo "</table></br>";
		echo "<input type='hidden' name='tabla' value='$tabla'><input type='submit' name='envia' value='Modifica'/></form>";
	}
?>	