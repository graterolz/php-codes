<?php
	include("config_mysql.php");
	function conectar() {
		$con = mysql_connect(HOST,USER,PASS) or die("Error en conexion: ".mysql_eror());
		$base_datos = mysql_select_db(DB,$con) or die("Error al seleccionar base de datos: ".mysql_error());
		return $con;
	}
?>