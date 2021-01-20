<?php
	// Generar un valor aleatorio entre 1 y 5. Luego mostrar su nombre en letras.
	$valor = rand(1,5);
	echo "El valor sorteado es $valor<br>";
	if($valor==1)
		echo "$valor equivale a uno en letras";
	elseif($valor==2)
		echo "$valor equivale a dos en letras";
	elseif($valor==3)
		echo "$valor equivale a tres en letras";
	elseif($valor==4)
		echo "$valor equivale a cuatro en letras";	
	else
		echo "$valor equivale a cinco en letras";	
?>