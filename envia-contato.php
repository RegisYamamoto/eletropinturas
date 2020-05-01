<?php
	session_start();
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$assunto = $_POST["assunto"];
	$mensagem = $_POST["mensagem"];

	require_once("PHPMailerAutoload.php");

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'email-ssl.com.br';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "contato@eletropinturas.com.br";
	$mail->Password = "ritagleyson";

	$mail->setFrom("contato@eletropinturas.com.br", "Eletropinturas");
	$mail->addAddress("eletropinturaslondrina@gmail.com");
	$mail->Subject = "Email de contato do site www.eletropinturas.com.br";
	$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>assunto: {$assunto}<br/>mensagem: {$mensagem}</html>");
	$mail->AltBody = "de: {$nome}\nemail: {$email}\nassunto: {$assunto}\nmensagem: {$mensagem}";

	if($mail->send()) {
		$_SESSION["success"];

		header('location: index.php?sucesso');
	} else {
		$_SESSION["danger"];
		header("Location: index.php");
	}

	die();