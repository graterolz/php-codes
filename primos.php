<html>
	<head>
		<title>Proyecto 4-3: Prueba de N�meros Primos</title>
	</head>
	<body>
		<h2>Proyecto 4-3: Prueba de N�meros Primos</h2>
		<?php
			// si el formulario no ha sido enviado
			// presenta el formulario
			if(!isset($_POST['submit'])) {
		?>
		<form method="post" action="primos.php">
			Escriba una l�nea de n�meros, separados por comas: <br />
			<input type='text' name='num' />
			<p>
				<input type="submit" name="submit" value="Enviar" />
		</form>
		<?php
			// si el formulario ya ha sido enviado
			// procesa los datos de entrada
			}
			else {
				// recupera los n�meros del env�o POST
				// los convierte en una matriz de acuerdo con la separaci�n por comas
				$cadNums = $_POST['num'];
				$matrizNums = explode(',',$_POST['num']);
				$primos = array();
				$primosMarca = 0;
				// itera sobre la matriz
				// obtiene el valor absoluto de cada n�mero
				foreach($matrizNums as $n) {
					// verifica si cada n�mero es primo
					// prueba cada n�mero dividi�ndolo
					// por todos los n�meros existentes entre �l mismo y el 2
					// si no es perfectamente divisible por ninguno
					// el n�mero es primo
					for($i=2;$i<$n;$i++) {
						$primosMarca = 0;
						if(($n%$i)==0)
							break;
						$primosMarca = 1;
					}
					// si es primo
					// se a�ade a la matriz de salida
					if($primosMarca == 1)
						array_push($primos,$n);
				}
				// verifica si se encontraron n�meros primos
				// de ser as�, los organiza y elimina duplicados de la matriz
				// presenta el mensaje en pantalla
				if(count($primos)>0) {
					$primos = array_unique($primos);
					sort($primos);
					echo 'Los siguientes n�meros son primos: ' . implode($primos, ' ');
				}
				else
					echo 'No se encontraron n�meros primos';
			}
		?>
	</body>
</html>