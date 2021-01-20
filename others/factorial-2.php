<?php
	// si el formulario no se ha enviado
	// presenta el formulario
	if(!isset($_POST['submit'])) {
?>
	<form method="post" action="factorial.php">
		Ingresa un número: <br />
		<input type="text" name="num" size="3" />
		<p>
		<input type="submit" name="submit" value="Enviar" />
	</form>
<?php
	// si el formulario ya se ha enviado
	// procesa los datos de entrada
	}
	else {
		// recupera el número del formulario
		$num = $_POST['num'];
		// verificar que el número sea positivo
		if($num <= 0) {
			echo 'Error: por favor ingrese un número superior a 0';
			exit();
		}
		// calcula el factorial multiplicando el número por
		// todos los números entre él y el 1
		$factorial = 1;
		for($x=$num; $x>=1; $x--)
			$factorial *= $x;
		echo "El factorial de $num es: $factorial";	
	}
?>