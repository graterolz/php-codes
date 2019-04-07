<?php
	// Incluir la logica del modelo
	require_once('modelo.php');
	// Obtener la lista de trabajadores
	$trabajadores = getTodosLosTrabajadores();
	// Incluir la logica de la vista
	require('vista.php');
?>