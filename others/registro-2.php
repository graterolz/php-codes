<html>
	<head>
		<title>Proyecto 3-4: Registro de Miembros</title>
	</head>
	<body>
		<h2>Proyecto 3-4: Registro de Miembros</h2>
		<?php
			// recupera detalles del env�o POST
			$nombre = $_POST['nombre'];
			$direccion = $_POST['direccion'];
			$edad = $_POST['edad'];
			$profesion = $_POST['profesion'];
			$residencia = $_POST['residencia'];
			// valida los datos enviados
			// verifica nombre
			if(empty($nombre))
				die ('ERROR: Por favor proporcione su nombre.');
			// verifica direcci�n
			if(empty($direccion))
				die ('ERROR: Por favor proporcione su direcci�n.');
			// verifica edad
			if(empty($edad))
				die ('ERROR: Por favor proporcione su edad.');
			elseif ($edad < 18 || $edad > 60)
				die ('ERROR: Las menbres�as s�lo est�n disponibles para mayores de 18 y menores de 60 a�os');
			// verifica profesi�n
			if(empty($profesion))
				die ('ERROR: Por favor proporcione su profesi�n.');
			// verifica estatus residencial
			if(strcmp($residencia,'no') == 0)
				die ('ERROR: Las membres�as s�lo est�n abiertas para residentes');
			// si llegamos a este punto
			// todos los datos de entrada han pasado la validaci�n
			// crea y env�a el mensaje de correo electr�nico
			$to = 'demo@gmail.com';
			$from = 'demo@demo.com';
			$subject = 'Solicitud de membres�a';
			$body = "Nombre: $nombre\r\nDirecci�n: $direccion\r\nEdad: $edad\r\nProfesi�n: $profesion\r\nEstatus residencial: $residencia\r\n";
			if(mail($to,$subject,$body,"From: $from"))
				echo 'Gracias por enviar su solicitud';
			else
				die ('ERROR: Error al enviar el mensaje');
		?>
	</body>
</html>