<?php
	class conexion {
		function recuperarDatos() {
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "music";
			$con = mysql_connect($host,$user,$pw) or die("Error: no se pudo conectar a la base de datos...");
			mysql_select_db($db,$con) or die("Error: no se encontró la base de datos");
		}
	}
?>