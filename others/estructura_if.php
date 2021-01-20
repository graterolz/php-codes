<?php
	// Generar un valor aleatorio entre 1 y 100. Luego mostrar si tiene 1,2 o 3 digitos.
	$valor = rand(1,100);
	echo "El valor sorteado es $valor<br>";
	if($valor<=9)
		echo "Tiene un digito";
	elseif($valor<100)
		echo "Tiene dos digitos";
	else
		echo "Tiene 3 digitos";
?>