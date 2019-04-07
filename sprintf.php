<?php
	$preciobruto = 119.6;
	$iva = 0.196;
	$resultado = $preciobruto - $preciobruto / (1 + $iva);
	$resultado = sprintf("%01.2f",$resultado);
	echo "$preciobruto EUR contienen $resultado EUR de IVA.";
?>