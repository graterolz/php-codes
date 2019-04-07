<?php 
	session_start();
	// Si no existen los datos de usuario
	// en las variables de sesión, se inicializan
	if (!isset($_SESSION['userlogon'])) {
		$_SESSION['userlogon'] = 0;
		$_SESSION['userid'] = 0;
		$_SESSION['username'] = '';
	}
	// Valores para conexión a base de datos
	$dbhost = 'localhost'; 
	$dbuser = 'root';
	$dbpassword = '';
	$dbname = 'dbexample'; 
	// FUNCIONES
	// Pone apóstrofes al principio y final del valor recibido
	// si el valor recibido es vacío, devolverá la palabra "null"
	function ms_scm($value) {
		if ($value == '') $r = 'null';
		else $r = chr(39).str_replace(chr(39), chr(39).chr(39), $value).chr(39);
		return $r;
	}
	// Para facilitar la vida a los nuevos, esta función crear la base de datos y las
	// tablas que se utilizan en el ejemplo.
	function init_example_database($db) {
		global $dbname;
		// Creación de base de datos si no existe
		$qry = 'CREATE DATABASE IF NOT EXISTS `'.$dbname.'` ';
		$qry .= ' DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci';
		mysql_query($qry);
		mysql_select_db($dbname)or die('ERROR:'.mysql_error());
		// Creación de tabla de estados de comentario si no existe
		$qry = 'CREATE TABLE IF NOT EXISTS `ex3_estado` (';
		$qry .= ' `Id_Estado` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,';
		$qry .= ' `Descripcion` VARCHAR(100) NOT NULL DEFAULT \'\',';
		$qry .= ' PRIMARY KEY(`Id_Estado`)';
		$qry .= ')';
		$qry .= ' ENGINE = MYISAM;';
		mysql_query($qry);
		// Inserción de estados si no existen
		$result = mysql_query('select count(*) as N from ex3_estado', $db);
		$row = mysql_fetch_row($result);
		$n = $row[0];
		mysql_free_result($result); 
		if ($n == 0){
			$qry = 'insert into ex3_estado (descripcion) values (\'Pendiente de validar\'), (\'Válido\'), (\'Inválido\');';
			mysql_query($qry);
		}
		// Creación de tabla de usuarios si no existe
		$qry = 'CREATE TABLE IF NOT EXISTS `ex3_usuario` (';
		$qry .= ' `Id_Usuario` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,';
		$qry .= ' `Usuario` VARCHAR(10) NOT NULL,';
		$qry .= ' `Clave` VARCHAR(50) NOT NULL,';
		$qry .= ' PRIMARY KEY(`Id_Usuario`)';
		$qry .= ')';
		$qry .= ' ENGINE = MYISAM;';
		mysql_query($qry);
		// Inserción de usuarios si no existen
		$result = mysql_query('select count(*) as N from ex3_usuario', $db);
		$row = mysql_fetch_row($result);
		$n = $row[0];
		mysql_free_result($result);
		if ($n == 0) {
			$qry = 'insert into ex3_usuario (usuario, clave) values ('.ms_scm('Admin').', md5('.ms_scm('1234').'))';
			mysql_query($qry);
		}
		// Creación de tabla de comentarios si no existe
		$qry = 'CREATE TABLE IF NOT EXISTS `ex3_comentario` (';
		$qry .= ' `Id_Comentario` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,';
		$qry .= ' `Firma` VARCHAR(100) NOT NULL DEFAULT \'\',';
		$qry .= ' `Comentario` TEXT NOT NULL DEFAULT \'\',';
		$qry .= ' `FRegistro` DATETIME NOT NULL DEFAULT 0,';
		$qry .= ' `Id_Estado` INTEGER NOT NULL DEFAULT 1,';
		$qry .= ' PRIMARY KEY(`Id_Comentario`)';
		$qry .= ')';
		$qry .= ' ENGINE = MYISAM;';
		mysql_query($qry);
	}
?>