<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
require './PHPMailer/src/PHPMailer.php';

if (!isset($_POST['submitEmail']))
	header("Location: ../");
else {
	$out = $errCopy = '';

	$_SESSION['formEmail'] = $_POST['email'];
	$_SESSION['formObjet'] = $_POST['objet'];
	$_SESSION['formMess']  = $_POST['message'];

	if (!isset($_POST['email']) || empty($_POST['email']))
	{
		if (!empty($out))
			$out .= '&';

		$out .= 'erremail=1';
	}
	else if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$#", $_POST['email']))
	{
		if (!empty($out))
			$out .= '&';

		$out .= 'erremail=2';
	}

	if (strlen($_POST['objet']) < 3 || strlen($_POST['objet']) > 100)
	{
		if (!empty($out))
			$out .= '&';

		$out .= 'errobjet=1';
	}

	if (strlen($_POST['message']) < 20 || strlen($_POST['message']) > 5000)
	{
		if (!empty($out))
			$out .= '&';

		$out .= 'errmess=1';
	}

	if( $_POST['captcha'] != ($_SESSION['captcha'][0] + $_SESSION['captcha'][1]) ) {
		if (!empty($out))
			$out .= '&';

		$out .= 'errcaptcha=1';
	}

	if (!empty($out)) {
		$out = '?'.$out.'#contact';
	}
	else {
		$bodyMail = stripslashes(trim($_POST['message']));

		$mail = new PHPmailer();
		$mail->IsMail();
		$mail->CharSet = 'UTF-8';
		$mail->From = stripslashes(trim($_POST['email']));
		$mail->AddAddress('contact@thomasblanschong.fr', 'Thomas Blanschong');
		$mail->AddReplyTo( stripslashes(trim($_POST['email'])) );
		$mail->Subject = stripslashes(trim($_POST['objet']));
		$mail->Body = $bodyMail;

		if (!$mail->Send()) {
			$_SESSION['erreurMail'] = $mail->ErrorInfo;
			$out = '?errsend';
		}
		else {
			session_destroy();
			$out = '?sent';
		}

		unset($mail);
	}

	header("Location: ../".$out);
}
?>
