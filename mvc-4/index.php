<?php
	// Incluir la logica del modelo
	require_once('m_acceso.php');
	// Obtener la lista de trabajadores
	$trabajadores = getTodosLosTrabajadores();
	// Incluir la logica de la vista
	require('v_logica.php');
	require('v_layout.php');
?>