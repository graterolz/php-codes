<?php
	$ar=fopen("datos.txt","w") or die("Problemas en la creación");
	fputs($ar,$_REQUEST['nombre']);
	fputs($ar,"\n");
	fputs($ar,$_REQUEST['direccion']);
	fputs($ar,"\n");
	fputs($ar,"--------------------------------------------------------");
	fputs($ar,$_REQUEST['check1']);
	fputs($ar,"\n");
	fputs($ar,$_REQUEST['cant1']);
	fputs($ar,"\n");
	fputs($ar,"--------------------------------------------------------");
	fputs($ar,$_REQUEST['check2']);
	fputs($ar,"\n");
	fputs($ar,$_REQUEST['cant2']);
	fputs($ar,"\n");
	fputs($ar,"--------------------------------------------------------");
	fputs($ar,$_REQUEST['check3']);
	fputs($ar,"\n");
	fputs($ar,$_REQUEST['cant3']);
	fputs($ar,"\n");
	fclose($ar);
	echo "Los datos se cargaron correctamente.";
?>