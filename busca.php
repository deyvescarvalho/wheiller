<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];
$texto3 = $_POST['texto3'];
$caminho1 = $_FILES["caminho1"];
$caminho2 = $_FILES["caminho2"];
$caminho3 = $_FILES['caminho3'];




$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'deyvescarvalho@gmail.com';                 // SMTP username
$mail->Password = 'abstratooi%#dka';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
// $mail->setLanguage('br');

$mail->setFrom('deyvescarvalho@gmail.com');
$mail->addAddress('deyvescarvalho@gmail.com');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');
$mail->addReplyTo('deyvescarvalho@gmail.com');


$mail->addAttachment($caminho1["tmp_name"], $caminho1["name"]);
$mail->addAttachment($caminho2["tmp_name"], $caminho2["name"]);
$mail->addAttachment($caminho3["tmp_name"], $caminho3["name"]);

$mail->isHTML(true);                                  // Set email format to HTML


$mail->Subject = 'PRODUÇÃO DE VT';

$mail->Body   =  '<p>Texo1 :</p>'.$texto1;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';




if(!$mail->send()) {
	echo 'Ocorreu uma falha, e não pode ser enviado.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Pedido enviado com sucesso!';
}
?>
