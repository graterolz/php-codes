<html>
	<head>
		<title>Proyecto 3-2: Asignación de tiendas de campaña</title>
	</head>
	<body>
		<h2>Proyecto 3-2: Asignación de tiendas de campaña</h2>
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
				// recupera la edad enviada por el método POST
				$edad = $_POST['age'];
				// asigna a una de cuatro tiendas
				// de acuerdo con el "binario" de edad al que pertenece
				if($edad<=9)
					echo 'Estás en la tienda de campaña Roja.';
				elseif($edad>9 && $edad<=11)
					echo 'Estás en la tienda de campaña Azul.';
				elseif($edad>11 && $edad<=14)
					echo 'Estás en la tienda de campaña Verde.';
				elseif($edad>14 && $edad<=17)
					echo 'Estás en la tienda de campaña Negra.';
				else
					echo 'Mejor comunícate con el líder de los niños exploradores.'; 
			}
		?>
	</body>
</html>