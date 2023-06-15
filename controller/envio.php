<?php

$to      = Config::EMAIL_HOST;
$subject = 'Contato - GloboMart';
$message = 'Email de ' . $_GET['nome']. "\r\n" . $_GET['message'];
$dest = $_GET['email'];

$headers = "From: " . $dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com sucesso!')</script>

<meta http-equiv="refresh" content="0; url=../view/contact-us.html">
