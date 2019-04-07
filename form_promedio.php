<?php
	function retornapromedio($valor1,$valor2) {
		$pro=$valor1/$valor2;
		return $pro;
	}
	$v1=100;
	$v2=50;
	$p=retornapromedio($v1,$v2);
	echo $p;
?>