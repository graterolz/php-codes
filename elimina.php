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
		echo "<form name='envia_eliminar' method='post' action='elimina_registros.php'>";
		echo "<table border=1>";
		// genera el encabezado de la tabla con los resultados
		// cabecera cajeros
		$cab_caj = "<tr><td>ID</td><td>Nombre</td><td>Password</td><td>Permisos</td>".
			"<td>Selecciona</td></tr>";
		// cabecera productos
		$cab_pro = "<tr><td>ID</td><td>Nombre</td><td>Codigo</td><td>Tipo</td><td>Genero</td>".
			"<td>Precio</td><td>Existencia</td><td>Selecciona</td></tr>";
		echo $tabla=="cajeros" ? $cab_caj:$cab_pro;
		while($campo=mysql_fetch_array($result)) {
			if($tabla=='cajeros') {
				echo "<tr><td>$campo[id]</td><td>$campo[nombre]</td><td>$campo[pass]</td>".
				"<td>$campo[permisos]</td>".
				"<td><input type='checkbox' name='cajeros.$campo[id]' value='$campo[id]'>".
				"</td></tr>";
			}
			else {
				echo "<tr><td>$campo[id]</td><td>$campo[nombre]</td><td>$campo[codigo]</td>".
				"<td>$campo[tipo]</td><td>$campo[genero]</td><td>$campo[precio]</td>".
				"<td>$campo[existencia]</td>".
				"<td><input type='checkbox' name='productos.$campo[id]' value='$campo[id]'>".
				"</td></tr>";
			}
		}
		echo "</table><br />"; 
		echo "<input type='hidden' name='tabla' value='$tabla'><input type='submit'".
			" name='envia' value='Eliminar' /></form>"; 
	}
?>