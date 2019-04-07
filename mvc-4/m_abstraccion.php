<?php
	function crear_conexion($servidor,$usuario,$contrasena) {
		return mysql_connect($servidor,$usuario,$contrasena);
	}
	//
	function cerrar_conexion($conexion) {
		mysql_close($conexion);
	}
	//
	function consulta_base_de_datos($consulta,$base_datos,$conexion) {
		mysql_select_db($base_datos,$conexion);
		return mysql_query($consulta,$conexion);
	}
	//
	function obtener_resultados($resultado) {
		return mysql_fetch_array($resultado,MYSQL_ASSOC); 
	}
?>