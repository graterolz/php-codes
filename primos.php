<html>
	<head>
		<title>Proyecto 4-3: Prueba de Números Primos</title>
	</head>
	<body>
		<h2>Proyecto 4-3: Prueba de Números Primos</h2>
		<?php
			// si el formulario no ha sido enviado
			// presenta el formulario
			if(!isset($_POST['submit'])) {
		?>
		<form method="post" action="primos.php">
			Escriba una línea de números, separados por comas: <br />
			<input type='text' name='num' />
			<p>
				<input type="submit" name="submit" value="Enviar" />
		</form>
		<?php
			// si el formulario ya ha sido enviado
			// procesa los datos de entrada
			}
			else {
				// recupera los números del envío POST
				// los convierte en una matriz de acuerdo con la separación por comas
				$cadNums = $_POST['num'];
				$matrizNums = explode(',',$_POST['num']);
				$primos = array();
				$primosMarca = 0;
				// itera sobre la matriz
				// obtiene el valor absoluto de cada número
				foreach($matrizNums as $n) {
					// verifica si cada número es primo
					// prueba cada número dividiéndolo
					// por todos los números existentes entre él mismo y el 2
					// si no es perfectamente divisible por ninguno
					// el número es primo
					for($i=2;$i<$n;$i++) {
						$primosMarca = 0;
						if(($n%$i)==0)
							break;
						$primosMarca = 1;
					}
					// si es primo
					// se añade a la matriz de salida
					if($primosMarca == 1)
						array_push($primos,$n);
				}
				// verifica si se encontraron números primos
				// de ser así, los organiza y elimina duplicados de la matriz
				// presenta el mensaje en pantalla
				if(count($primos)>0) {
					$primos = array_unique($primos);
					sort($primos);
					echo 'Los siguientes números son primos: ' . implode($primos, ' ');
				}
				else
					echo 'No se encontraron números primos';
			}
		?>
	</body>
</html>