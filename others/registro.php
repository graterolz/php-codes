<?php
	$realname = $_POST['realname'];
	$nick = $_POST['nick'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];
	$reqlen = strlen($nick)*strlen($pass)*strlen($rpass);
	if($reqlen>0)
	if($pass===$rpass) {
		require("connect_db.php");
		$pass = md5($pass);
		mysql_query("INSERT INTO registro VALUES('','$realname','$nick','$pass')");
		mysql_close($link);
		echo "Se ha registrado exitosamente.";
	}
	else
		echo "Por favor, introduzca dos contraseñas idénticas.";
	else
		echo "Por favor, rellene todos los campos requeridos.";
?>