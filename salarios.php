<?php
	// los empleados con ingresos mensuales <= 15000
	// y con un rendimiento >=3 reciben un bono de $5000
	// el resto recibe un bono de $3000
	$rendimiento = 4;
	$salario = 14000;
	if ($rendimiento >= 3)
		if ($salario<=15000)
			$bono = 5000;
		else
			if ($salario > 15000)
				$bono = 3000;
	echo 'El total a devengar, es: '.($salario+$bono).' Bs.';
?>