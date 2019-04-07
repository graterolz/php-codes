<?php
	include("funciones/funciones_mysql.php");
	conectar();
	extract($_POST);
	$cont = 0;
	foreach($_POST as $campo=>$valor) {
		if((strstr($campo,"producto"))||(strstr($campo,"cajero"))) {
			$id = explode("_",$campo);
			$nombre="nombre_".$id[1];
			$pass="pass_".$id[1];
			$permisos="permisos_".$id[1];
			$codigo="codigo_".$id[1];
			$tipo="tipo_".$id[1];
			$genero="genero_".$id[1];
			$precio="precio_".$id[1];
			$existencia="existencia_".$id[1];
			$tabla == "cajeros" ? $sql="UPDATE $tabla SET nombre='".$$nombre."',pass='".$$pass."',permisos='".$$permisos."' WHERE id=$id[1]" : $sql="UPDATE $tabla SET nombre='".$$nombre."',codigo='".$$codigo."',tipo='".$$tipo."',genero='".$$genero."',precio=".$$precio.",existencia=".$$existencia." WHERE id=$id[1]";
			$result = mysql_query($sql) or die("Error en la modificación: ".mysql_error());
			$cont++;
		}
	}
	echo "$cont registro(s) modificado(s) con exito <a href='modifica_panel.html'>Volver</a>";
?>