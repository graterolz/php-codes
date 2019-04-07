<html>
	<head>
		<title>Proyecto 3-4: Registro de Miembros</title>
	</head>
	<body>
		<h2>Proyecto 3-4: Registro de Miembros</h2>
		<?php
			// recupera detalles del envío POST
			$nombre = $_POST['nombre'];
			$direccion = $_POST['direccion'];
			$edad = $_POST['edad'];
			$profesion = $_POST['profesion'];
			$residencia = $_POST['residencia'];
			// valida los datos enviados
			// verifica nombre
			if(empty($nombre))
				die ('ERROR: Por favor proporcione su nombre.');
			// verifica dirección
			if(empty($direccion))
				die ('ERROR: Por favor proporcione su dirección.');
			// verifica edad
			if(empty($edad))
				die ('ERROR: Por favor proporcione su edad.');
			elseif ($edad < 18 || $edad > 60)
				die ('ERROR: Las menbresías sólo están disponibles para mayores de 18 y menores de 60 años');
			// verifica profesión
			if(empty($profesion))
				die ('ERROR: Por favor proporcione su profesión.');
			// verifica estatus residencial
			if(strcmp($residencia,'no') == 0)
				die ('ERROR: Las membresías sólo están abiertas para residentes');
			// si llegamos a este punto
			// todos los datos de entrada han pasado la validación
			// crea y envía el mensaje de correo electrónico
			$to = 'demo@gmail.com';
			$from = 'demo@demo.com';
			$subject = 'Solicitud de membresía';
			$body = "Nombre: $nombre\r\nDirección: $direccion\r\nEdad: $edad\r\nProfesión: $profesion\r\nEstatus residencial: $residencia\r\n";
			if(mail($to,$subject,$body,"From: $from"))
				echo 'Gracias por enviar su solicitud';
			else
				die ('ERROR: Error al enviar el mensaje');
		?>
	</body>
</html>