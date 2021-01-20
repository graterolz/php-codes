<?php
	include("funciones/funciones_mysql.php");
	conectar();
	extract($_POST);
	$sql = "SELECT * FROM cajeros WHERE nombre='$user' AND pass='$pass'";
	$result = mysql_query($sql) or die("Error al buscar usuario en la BD: ".mysql_error());
	$campo = mysql_fetch_array($result);
	if(!empty($campo['nombre'])) {
		echo "<script language='javascript'>window.open"."('ventas_panel.php?id=$campo[id]','_self','')";
		echo "</script>";
	}
	else {
		// En casp que el usuario y/o la contraseña no se haya encontrado, se muestra el siguiente mensaje
		echo "Error en el nombre de Usuario o Contraseña<br />";
		echo "<a href='ventas_sesion.html'>Intentar de nuevo...</a>";
	 }
?>