<?php
	//M_PI es una variable predefinida con el valor de PI.
	printf("PI es: %d <br>", M_PI);
	printf("PI es: %.2f <br>", M_PI);
	printf("PI es: %.3f <br>", M_PI);
	printf("PI es: %.4f <br>", M_PI);
	$numero = 65;
	printf("%c <br>",$numero);
	for($count=97;$count<=122;$count++) {
		printf("%c",$count);
	}
	echo "<br>";
	printf("uno vale %d; otro vale %c <br>",$numero,$numero);
	$number = 255;
	printf("En formato decimal: %d <br>",$number);
	printf("En formato hexadecimal: %x <br>",$number);
	printf("En formato hexadecimal: %X <br>",$number);
	printf("En formato octal: %o <br>",$number);
	printf("Decimal exponencial: %e <br>",$number);
	printf("En binario: %b <br>",$number);
	printf("%.2s\n <br>","patata"); 
	printf("%.4s\n <br>","patata");
	printf("%9.4s\n <br>","patata"); // Total 9 caracteres, resta espacios
	printf("%9s\n <br>","patata"); // El resto hasta 9 caracteres lo rellena con espacios
	printf("%-9s*\n <br>","patata"); // // El resto hasta 9 caracteres lo rellena con espacios a la izquierda
	printf("%09s\n <br>","patata"); // El resto hasta 9 caracteres lo rellena con ceros
	printf("%'x9s\n <br>","patata"); // El resto hasta 9 caracteres lo rellena con x
?>