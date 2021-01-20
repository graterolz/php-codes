<?php
	// define message
	$to = 'user@domain.com';
	$subject = 'Hello';
	$body = "This is a test";
	// define custom headers
	$headers = "From:webmaster@my.domain.com\r\nOrganization:MyOrg Inc.\r\nX-Mailer:PHP";
	if(mail($to, $subject, $body, $headers)) {
		echo 'Your message was sent.';
	}
	else {
		die('ERROR: Mail delivery error');
	}
?>