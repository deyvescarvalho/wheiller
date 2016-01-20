<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];
$texto3 = $_POST['texto3'];
$caminho1 = $_FILES['caminho1'];
$caminho2 = $_FILES['caminho2'];
$caminho3 = $_FILES['caminho3'];

$mail->addAttachment($caminho1["tmp_name"], $caminho1["name"]);
$mail->addAttachment($caminho2["tmp_name"], $caminho2["name"]);
$mail->addAttachment($caminho3["tmp_name"], $caminho3["name"]);


$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'email-smtp.us-west-2.amazonaws.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'AKIAI457JK2CS5MW4HOA';                 // SMTP username
$mail->Password = 'An4zLD0UBjOhm0jg/GFt+Afub0TlIwRl6efkKdZMlNMi';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setLanguage('br');

$mail->setFrom('deyvescarvalho@gmail.com');
$mail->addAddress('deyvescarvalho@gmail.com');     // Add a recipient
$mail->addReplyTo('deyvescarvalho@gmail.com');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'PRODUÇÃO DE VT'.$id;

// $mail->Body   .=  '<p>slogan da Empresa :</p>'.$sloganEmpresa.$quebralina;
$mail->Body   .=  '<p>Texo1 :</p>'.$texto1;
$mail->Body   .=  '<p>Texo2 :</p>'.$texto2;
$mail->Body   .=  '<p>Texo3 :</p>'.$texto3;
$mail->Body   .=  '<p>Caminho1 :</p>'.$caminho1;
$mail->Body   .=  '<p>Caminho2 :</p>'.$caminho2;
$mail->Body   .=  '<p>Caminho3 :</p>'.$caminho3;

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
	echo 'Ocorreu uma falha, e não pode ser enviado.';
} else {
	echo 'Pedido enviado com sucesso!';
}
?>
