<?php
	function cuadradocubo($valor,&$cuad,&$cub) {
		$cuad=$valor*$valor;
		$cub=$valor*$valor*$valor;
	}
	$num=2;
	cuadradocubo($num,$c1,$c2);
	echo "El cuadrado de $num es: ".$c1."<br>";
	echo "El cubo de $num es: ".$c2."<br>";
?>