<?php
	$ar=fopen("datos.txt","a") or die("Problemas en la creaci�n");
	fputs($ar,$_REQUEST['nombre']);
	fputs($ar,"\n");
	fputs($ar,$_REQUEST['comentarios']);
	fputs($ar,"\n");
	fputs($ar,"--------------------------------------------------------");
	fputs($ar,"\n");
	fclose($ar);
	echo "Los datos se cargaron correctamente.";
?>