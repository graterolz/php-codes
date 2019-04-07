<html>
	<head>
		<title>Proyecto 3-2: Asignaci�n de tiendas de campa�a</title>
	</head>
	<body>
		<h2>Proyecto 3-2: Asignaci�n de tiendas de campa�a</h2>
		<?php
			// si el formulario no ha sido enviado
			// muestra el formulario
			if(!isset($_POST['submit'])) {
		?>
		<form method="post" action="tienda.php">
			Escribe tu edad: <br />
			<input type="text" name="age" size="3" />
			<p>
				<input type="submit" name="submit" value="Enviar" />
		</form>
		<?php
			// si el formulario ha sido enviado
			// procesa los datos ingresados
			}
			else {
				// recupera la edad enviada por el m�todo POST
				$edad = $_POST['age'];
				// asigna a una de cuatro tiendas
				// de acuerdo con el "binario" de edad al que pertenece
				if($edad<=9)
					echo 'Est�s en la tienda de campa�a Roja.';
				elseif($edad>9 && $edad<=11)
					echo 'Est�s en la tienda de campa�a Azul.';
				elseif($edad>11 && $edad<=14)
					echo 'Est�s en la tienda de campa�a Verde.';
				elseif($edad>14 && $edad<=17)
					echo 'Est�s en la tienda de campa�a Negra.';
				else
					echo 'Mejor comun�cate con el l�der de los ni�os exploradores.'; 
			}
		?>
	</body>
</html>