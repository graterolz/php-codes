<?php
	DEFINE("HOST", "localhost");
	DEFINE("DATABASE", "ramones2");
	DEFINE("USER", "root");
	DEFINE("PASSWORD", "");
	DEFINE("EMAIL", "admin@admin.com");
	//
	if(stristr($_SERVER['HTTP_HOST'], 'local') || substr($_SERVER['HTTP_HOST'], 0,7) == '198.168'){
		$local = TRUE;
	}
	else{
		$local = FALSE;
	}
	//Determinar la direccion de los archivos
	//permite la configuracion de varios servidores
	if ($local){
		//depurar a nivel local
		$depuracion = TRUE;
		define('BASE_URI', 'path/to/html/folder/');
		define('BASE_URL', 'localhost/ramones2/htdoc/');
	}
	else{
		define('BASE_URI', 'path/to/live/html/folder/');
		define('BASE_URL', 'http://www.ejemplo.com/');
	}
	//Depuracion desarvivada
	if(!isset($depuracion)){
		$depuracion = FALSE;
	}
	//
	function set_my_error_handler($number, $mensaje, $file, $line, $e_vars ){
		global $depuracion;
		$m = "Disculpe hubo un error en el archivo '$file' linea $line \n<br /> $mensaje\n<br />";
		$m .= "<pre>" . print_r($e_vars, 1) . "</pre>";
		if($depuracion){
			echo "<p>Error -> $m</p>";
		}
		else{
			//configurar para enviar por email o escribir un archivo
			error_log($message, 1, EMAIL);
			if ($number != E_NOTICE){
				echo "<p>Disculpe a ocurrido un error en nuestro sistema, le pedimos disculpa por los inconveniente.</p>";	
			}
		}
	}
	set_error_handler("set_my_error_handler");
	$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
	if(!$link){	
		echo "Error conla Conexión con la Base de Datos";
		exit;
	}
?>