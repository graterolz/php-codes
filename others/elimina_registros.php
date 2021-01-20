<?php
	include("funciones/funciones_mysql.php");
	conectar();
	extract($_POST);
	//
	$cont = 0;
	foreach($_POST as $campo=>$valor) {
		// preguntamos si en el campo hay algo que diga producto o cajero, de encontrar
		// algo significa que vien minimo un seleccionado para eliminar, si es asi, 
		// diseñamos la sentencia sql encargada y aumentamos en 1 el contador
		if(strstr($campo,"producto")||(strstr($campo,"cajero"))) {
			$sql = "DELETE FROM $tabla WHERE id='$valor'";
			mysql_query($sql) or die("Error al eliminar registro(s) ".$cont.mysql_error());
			$cont++;
		}
		// borramos el contenido de la variable sql para volver a crear la nueva
		$sql = "";
	}
	// si no hubo error llega hasta esta linea 
	echo "<strong></strong>$cont Registro(s) Eliminado(s) correctamente...<br />";
	echo "<a href='elimina_panel.html'>Volver al panel</a>";
?>