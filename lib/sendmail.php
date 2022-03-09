<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
require './PHPMailer/src/PHPMailer.php';

if (!isset($_POST['submitEmail']))
	header("Location: ../");
else {
	$out = $errCopy = '';

	$_SESSION['formNom']   = $_POST['nom'];
	$_SESSION['formEmail'] = $_POST['email'];
	$_SESSION['formSite']  = $_POST['site'];
	$_SESSION['formObjet'] = $_POST['objet'];
	$_SESSION['formMess']  = $_POST['message'];

	if (!isset($_POST['nom']) || empty($_POST['nom']))
	{
		$out = 'errnom=1';
	}
	else if (strlen($_POST['nom']) < 3 || strlen($_POST['nom']) > 50)
	{
		$out = 'errnom=2';
	}

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

	if (!empty($_POST['site']) && !preg_match("#^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?#", $_POST['site']))
	{
		if (!empty($out))
			$out .= '&';

		$out .= 'errsite=1';
	}

	if (strlen($_POST['objet']) < 3 || strlen($_POST['objet']) > 100)
	{
		if (!empty($out))
			$out .= '&';

		$out .= 'errobjet=1';
	}

	if (strlen($_POST['message']) < 20 || strlen($_POST['message']) > 1000)
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
		if (!empty($_POST['site']))
			$bodyMail = 'URL du site : '.stripslashes(trim($_POST['site']))."\n\n".stripslashes(trim($_POST['message']));
		else
			$bodyMail = stripslashes(trim($_POST['message']));

		$mail = new PHPmailer();
		$mail->IsMail();
		$mail->CharSet = 'UTF-8';
		$mail->From = stripslashes(trim($_POST['email']));
		$mail->FromName = stripslashes(trim($_POST['nom']));
		$mail->AddAddress('contact@thomasblanschong.fr', 'Thomas Blanschong');
		$mail->AddReplyTo( stripslashes(trim($_POST['email'])), stripslashes(trim($_POST['nom'])) );
		$mail->Subject = stripslashes(trim($_POST['objet']));
		$mail->Body = $bodyMail;

		if ($_POST['copie'] == 'on') {
			$bodyMail = 'Ceci est une copie du courriel que vous avez envoyé via le site https://thomasblanschong.fr'."\n".'*****************************'."\n".$bodyMail;

			$copy = new PHPmailer();
			$copy->IsMail();
			$copy->CharSet = 'UTF-8';
			$copy->From = stripslashes(trim($_POST['email']));
			$copy->FromName = stripslashes(trim($_POST['nom']));
			$copy->AddAddress(stripslashes(trim($_POST['email'])), stripslashes(trim($_POST['nom'])));
			$copy->AddReplyTo( stripslashes(trim($_POST['email'])), stripslashes(trim($_POST['nom'])) );
			$copy->Subject = stripslashes(trim($_POST['objet']));
			$copy->Body = $bodyMail;

			if (!$copy->Send()) {
				$errCopy = '1';
			}
		}

		if (!$mail->Send() || ($_POST['copie'] == 'on' && $errCopy == '1')) {
			$_SESSION['erreurMail'] = $mail->ErrorInfo;

			if ($_POST['copie'] == 'on')
				$_SESSION['erreurMail'] .= "\n".$copy->ErrorInfo;

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
