<?php
	// define función 
	// obtiene el MCD de dos números
	function mcd($a, $b) {
		if($b==0)
			return $a;
		else
			return mcd($b,$a % $b); 
	}
	// define una función
	// obtiene el mcm de dos números utilizando el MCD
	function mcm($a,$b) {
		return ($a * $b) / mcd($a, $b);
	}
?>
<html>
	<head>
		<title>Proyecto 5-1: MCD y mcm</title>
	</head>
	<body>
		<h2>Proyecto 5-1: MCD y mcm</h2>
		<?php
			// si el formulario no ha sido enviado
			// presenta formulario
			if(!isset($_POST['submit'])) {
		?>
		<form method="post" action="mcd_mcm.php">
			Escriba dos números enteros: <br />
			<input type="text" name="num_1" size="3" />
			<p>
				<input tyoe="text" name="num_2" size="3" />
				<p>
					<input type="submit" name="submit" value="Enviar" />
		</form>
		<?php
			// si el formulario ha sido enviado
			// procesa los datos de entrada
			}
			else {
				$num1 = (int) $_POST['num_1'];
				$num2 = (int) $_POST['num_2'];
				// calcula y presenta el MCD y el mcm
				echo "Usted escribió los números: $num1, $num2";
				echo "<br />";
				echo "El MCD de ($num1, $num2) es: " . mcd($num1, $num2);
				echo "<br />";
				echo "El mcm de ($num1, $num2) es: " . mcm($num1, $num2);
			}
		?>
	</body>
</html>