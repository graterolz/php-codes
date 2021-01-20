<?php
	// cargamos las funciones mysql
	include("funciones/funciones_mysql.php");
	conectar();
	// depende cual se selecciono es la
	// sentencia sql a usar
	if($_POST['boton']=='Alta_Cajero') {
		$sql="insert into cajeros(nombre,pass,permisos) values('$_REQUEST[nombre]','$_REQUEST[pass]','$_REQUEST[permisos]')";
		$result=mysql_query($sql) or die("Error al ejecutar consulta Cajeros:".mysql_error());
		echo "<strong>Datos insertados correctamente...</strong><br />";
		echo "<a href='inserta_panel.html'>Volver al menu, da click aqui</a>";	 
	}
?>