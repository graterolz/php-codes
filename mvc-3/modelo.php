<?php
	function getTodosLosTrabajadores() {
		// Conectar con la base de datos y seleccionarla
		$conexion = mysql_connect('localhost','root','');
		mysql_select_db('db_ejemplo',$conexion);
		// Ejecutar la consulta SQL
		$resultado = mysql_query('SELECT cedula,apellidos,nombres FROM trabajadores',$conexion);
		// Crear el array de elementos para la capa de la vista
		$trabajadores = array();
		while ($fila = mysql_fetch_array($resultado,MYSQL_ASSOC)) {
			$trabajadores[] = $fila;
		}
		// Cerrar la conexion
		mysql_close($conexion);
		return $trabajadores;
	}
?>