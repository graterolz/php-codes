<?php
	// Valores para conexi�n a base de datos
	$dbhost = 'localhost'; 
	$dbuser = 'root';
	$dbpassword = '';
	$dbname = 'dbexample'; 
	// FUNCIONES
	// Pone ap�strofes al principio y final del valor recibido
	// si el valor recibido es vac�o, devolver� la palabra "null"
	function ms_scm($value) {
		if ($value == '') $r = 'null';
		else $r = chr(39).str_replace(chr(39), chr(39).chr(39), $value).chr(39);
		return $r;
	}
	// Para facilitar la vida a los nuevos, esta funci�n crear la base de datos y la
	// tabla que se utiliza en el ejemplo.
	function init_example_database() {
		global $dbname;
		mysql_query('CREATE DATABASE IF NOT EXISTS `'.$dbname.'` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci');
		mysql_select_db($dbname)or die('ERROR:'.mysql_error());	
		$qry = 'CREATE TABLE `individuo` (';
		$qry.= '`Id_Individuo` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,';
		$qry.= '`Nombres` VARCHAR(60) NOT NULL DEFAULT \'\',';
		$qry.= '`Apellido1` VARCHAR(20) NOT NULL DEFAULT \'\',';
		$qry.= '`Apellido2` VARCHAR(20),';
		$qry.= 'PRIMARY KEY(`Id_Individuo`)';
		$qry.= ') ENGINE = MYISAM;';
		mysql_query($qry);
	}
?>