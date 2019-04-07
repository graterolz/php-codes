<?php
	require_once('m_abstraccion.php');
	function getTodosLosTrabajadores() {
		// Conectar con la base de datos y seleccionarla
		$conexion = crear_conexion('localhost','root','');
		// Ejecutar la consulta SQL
		$resultado = consulta_base_de_datos('SELECT cedula,apellidos,nombres FROM trabajadores','db_ejemplo',$conexion);
		// Crear el array de elementos para la capa de la vista
		$trabajadores = array();
		while ($fila = obtener_resultados($resultado)) {
			$trabajadores[] = $fila;
		}
		// Cerrar la conexion
		cerrar_conexion($conexion);
		return $trabajadores;
	}
?>