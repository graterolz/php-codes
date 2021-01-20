<?php
	function comprobar($valor1,$valor2) {
		$flag=false;
		if($valor1==$valor2)
			$flag=true;
		else
			$flag=false;
		return $flag;	
	}
	//
	if(comprobar($_REQUEST['clave1'],$_REQUEST['clave2']))
		echo "Las claves coinciden...";
	else
		echo "Error: las claves no coinciden...";
?>