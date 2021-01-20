<?php
	// cargamos las funciones mysql
	include("funciones/funciones_mysql.php");
	conectar();
	// depende cual se selecciono es la
	// sentencia sql a usar
	if($_POST['boton']=='Alta_Producto') {
		$sql="insert into productos(nombre,codigo,tipo,genero,precio,existencia) values('$_REQUEST[nombre]','$_REQUEST[codigo]','$_REQUEST[tipo]','$_REQUEST[genero]',$_REQUEST[precio],$_REQUEST[existencia])";
		$result=mysql_query($sql) or die("Error al ejecutar consulta Productos:".mysql_error());
		echo "<strong>Datos insertados correctamente...</strong><br />";
		echo "<a href='inserta_panel.html'>Volver al menu, da click aqui</a>";	 
	}
?>