<?php 
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
	if (mail("testt@mail.ru", $subject, $message, $headers))
		echo "Сообщение отправлено";
	else
		echo "Сообщение не отправлено";
?>