<?php
	// incluir la funcion encargada de conectar
	include("funciones/funciones_mysql.php");
	// extrae los datos enviados por el formulario
	// a la variable con el nombre del elemento
	// por ejemplo, el elemento nombre
	// queda como $nombre = valor
	extract($_POST);
	// llamar la funcion que conecta con el motor MySQL
	conectar();
	// diseñas la sentencia SQL
	$sql="SELECT * FROM $tabla WHERE nombre LIKE '$nombre'";
	// ejecutas la consulta
	$result=mysql_query($sql);
	// imprime el encabezado de la pagina resultado
	echo "<html><head><title>Resultado Consulta</title></head><body>";
	echo "<table border=1>";
	// sacas los valores del arreglo
	while($campo=mysql_fetch_array($result)) {
		if($tabla=='cajeros') {
			echo "<tr><td>$campo[id]</td>";
			echo "<td>$campo[nombre]</td><td>$campo[pass]</td><td>$campo[permisos]</td>";
		}
		else {
			echo "<tr><td>$campo[id]</td><td>$campo[nombre]</td><td>$campo[codigo]</td>";
			echo "<td>$campo[tipo]</td><td>$campo[genero]</td><td>$campo[precio]</td>";
			echo "<td>$campo[existencia]</td>";
		}
	}
	echo "</table>";
	echo "<strong>Realizar otra busqueda</strong><a href='consulta_panel.html'>
	Click aqui</a></body></html>";
?>