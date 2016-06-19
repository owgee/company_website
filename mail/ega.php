<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only// Set mailer to use SMTP
$mail->Host = 'smtp.eganet.go.tz';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;			       // Enable SMTP authentication
$mail->Username = 'support@brela.go.tz';		 // SMTP username
$mail->Password = 'Password5$';			   // SMTP password
$mail->SMTPSecure = '';			    // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;				    // TCP port to connect to

$mail->setFrom('support@brela.go.tz', 'Mailer');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('swillae1@gmail.com');	       // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->addAttachment('README.md');	 // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);				  // Set email format to HTML


$mail->Subject = 'Here is the subject';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}