<html>
	<head>
		<title>Proyecto 4-4: Calculadora de Edades</title>
	</head>
	<body>
		<h2>Proyecto 4-4: Calculadora de Edades</h2>
		<?php
			// si el formulario no ha sido enviado
			// muestra el formulario
			if(!isset($_POST['submit'])) {
		?>
		<form method="post" action="calculaedad.php">
			Escribe tu fecha de nacimiento en formato mm/dd/aaaa: <br />
			<input type="text" name="fdn" />
			<input type="submit" name="submit" value="Enviar" />
		</form>
		<?php
			// si el formulario ha sido enviado
			// procesa los datos enviados
			}
			else {
				// divide el valor de la fecha en sus componentes
				$fechaArr = explode('/',$_POST['fdn']);
				// calcula el sello cronol�gico correspondiente al valor de la fecha
				$fechaTs = strtotime($_POST['fdn']);
				// calcula el sello cronol�gico correspondiente al d�a de hoy, 'today'
				$now = strtotime('today');
				// verifica si los datos han sido enviados con el formato correcto
				if(sizeof($fechaArr) != 3) die('ERROR: Por favor escriba una fecha v�lida');
				// verifica si los datos insertados son una fecha v�lida
				if(!checkdate($fechaArr[0],$fechaArr[1],$fechaArr[2])) die('ERROR: Por favor escriba una fecha de nacimiento v�lida');
				// valida que la fecha sea anterior a hoy, 'today'
				if ($fechaTs >= $now) die('ERROR: Por favor escriba una fecha anterior al d�a de hoy');
				// calcula la diferencia entre la fecha de nacimiento y el d�a de hoy en d�as
				// convierte en a�os
				// convierte los d�as restantes en meses
				// presenta los datos de salida
				$edadDias = floor(($now - $fechaTs) / 86400);
				$edadAnos = floor($edadDias / 365);
				$edadMeses = floor(($edadDias - ($edadAnos * 365)) / 30);
				echo "Su edad aproximada es $edadAnos a�os y $edadMeses meses.";
			}
		?>
	</body>
</html>