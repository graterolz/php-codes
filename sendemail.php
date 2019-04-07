<?php
	class cl_ContactWithMail {
		var $msg;
		var $f_nombre;
		var $f_email;
		var $f_msg;
		var $mailto;
		var $flag;
		// El constructor que inicializa variables
		function __construct($mailto) {
			$this->msg = '';
			$this->f_nombre = '';
			$this->f_email = '';
			$this->f_msg = '';
			$this->mailto = $mailto;
			$this->flag = 0;
		}
		//
		private function is_valid_email($xmail){
			$r = ereg(	'^[A-Za-z0-9]+([\.]?[a-z0-9_-]+)*@'.// usuario
						'[a-z0-9]+([\.-]+[a-z0-9]+)*\.[a-z]{2,}$', // server.
						$xmail
					);
			if ($r == '') $r = 0;
			return $r;
		}
		// Función de envío de correo
		private function sendMsgMail($subject, $msg){
			// Se agrega firma al mensaje
			$sl = " \n";
			$msg .= $sl.$sl;
			$msg .= 'Atentamente, ';
			$msg .= $sl.$sl;
			$msg .= 'YO.';
			$additional_headers = 'FROM: <no-response@mail.com> ';
			return mail($this->mailto, $subject, $msg, $additional_headers);
		}
		// Función que verifica datos de $_POST
		// Valores posibles para "flag" después de su ejecución:
		//	0 => No hay $_POST
		//			=> Debe mostrarse formulario
		//	1 => Hay $_POST pero se detectaron errores en los datos recibidos
		//			=> Debe mostrarse formulario junto a mensajes de error
		//	2 => Intento fallido de envío de correo
		//			=> Debe mostrarse formulario junto a mensaje de error
		//	3 => Intento exitoso de envío de correo
		//			=> Debe mostrarse mensaje de envío satisfactorio
		public function checkPOST(){
			$this->msg = '';
			$this->f_nombre = '';
			$this->f_email = '';
			$this->f_msg = '';
			$this->flag = 0;
			// Si no hay $_POST, retorno
			if (!$_POST) return;
			// Se asigna valores de $_POST a variables
			$this->f_nombre = trim($_POST['f_nombre']);
			$this->f_email = trim($_POST['f_email']);
			$this->f_msg = trim($_POST['f_msg']);
			// Verificación de valores
			if ($this->f_nombre == '') $this->msg .= '<li>Debe indicar su nombre</li>';
			if ($this->f_email == '') $this->msg .= '<li>Debe indicar su e-mail</li>';
			else {
				if ($this->is_valid_email($this->f_email) == 0)
				$this->msg .= '<li>E-mail inv&aacute;lido.</li>';
			}
			
			if ($this->f_msg == '') $this->msg .= '<li>Debe ingresar un mensaje</li>';
			// Si se encontro algún error en los datos, 
			// se completa la lista y se retorna
			if ($this->msg != ''){
				$this->msg = '<ul>'.$this->msg.'</ul>';
				$this->flag = 1;
				return;
			}
			$subject = 'Mensaje recibido en sitio web';
			$sl = " \n";
			$mail_msg = 'Mensaje recibido en el sitio web';	
			$mail_msg .= $sl;
			$mail_msg .= '---------------------------------------';
			$mail_msg .= $sl;
			$mail_msg .= 'Fecha: '.date('d/m/Y H:i:s');
			$mail_msg .= $sl;
			$mail_msg .= $sl;
			$mail_msg .= 'Datos recibidos:';
			$mail_msg .= $sl;
			if ($this->f_nombre != '') $mail_msg .= '[Nombre] '.$this->f_nombre.$sl.$sl;
			if ($this->f_email != '') $mail_msg .= '[E-Mail] '.$this->f_email.$sl.$sl;
			if ($this->f_msg != '') $mail_msg .= '[Mensaje] '.$sl.$this->f_msg.$sl.$sl;
			$mail_msg .= $sl;
			$sent = $this->sendMsgMail($subject, $mail_msg);
			if ($sent === false) {
				$this->msg = 'Problemas en el sistema.';
				$this->msg .= '<br/>Vuelva a intentarlo m&aacute;s tarde.';
				$this->flag = 2;
			}
			else $this->flag = 3;
			return;
		}
	}
	$xm = new cl_ContactWithMail('EMAIL_DESTINO@MAIL.COM');
	$xm->checkPOST();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Ejemplo de formulario de contacto por e-mail con PHP</title>
		<style type="text/css">
			.master_div {
				width:450px;
				height:400px;
				border:1px solid #000000;
			}
			.full_width {
				width:99%;
			}
		</style>
	</head>
	<body>
		<div class="master_div">
		<?php
			if ($xm->flag < 3){
		?>
		<form id="form1" name="form1" method="post" action="">
			<table border="0" width="100%" cellpadding="0" cellspacing="2">
				<tr align="left">
					<td><h1>Ejemplo de env&iacute;o de formulario de contacto por e-mail con PHP</h1></td>
				</tr>
				<?php
					if ($xm->msg != '') echo '<tr align="left"><td><strong>'.$xm->msg.'</strong></td></tr>';
				?>
				<tr align="left"><td>Nombre:</td></tr>
				<tr align="left">
					<td><input class="full_width" type="text" name="f_nombre" value="<?=$xm->f_nombre?>"/></td>
				</tr>
				<tr align="left"><td>E-Mail:</td> </tr>
				<tr align="left">
					<td><input class="full_width" type="text" name="f_email" value="<?=$xm->f_email?>"/></td>
				</tr>
				<tr align="left"><td>Mensaje:</td></tr>
				<tr align="left">
					<td>
						<textarea class="full_width" name="f_msg" rows="5" cols="40"><?=$xm->f_msg?></textarea>
					</td>
				</tr>
				<tr align="left">
					<td><input class="full_width" type="submit" name="submit" value="Enviar mensaje"/></td>
				</tr>
			</table>
		</form>
		<?php
			}
			else{
				echo 'Mensaje enviado.';
			}
		?>
		</div>
	</body>
</html>