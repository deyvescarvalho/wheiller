<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];
$texto3 = $_POST['texto3'];

$anexo = $_FILES["anexo1"];
$anexo = $_FILES["anexo2"];
$anexo = $_FILES["anexo3"];





$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'wheillercarvalho@gmail.com';                 // SMTP username
$mail->Password = 'coloquesuasenhaaqui';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
// $mail->setLanguage('br');

$mail->setFrom('wheillercarvalho@gmail.com');
$mail->addAddress('wheillercarvalho@gmail.com');     // Add a recipient


$mail->addAttachment($anexo1["tmp_name"], $anexo1["name"]);
$mail->addAttachment($anexo2["tmp_name"], $anexo2["name"]);
$mail->addAttachment($anexo3["tmp_name"], $anexo3["name"]);

$mail->isHTML(true);                                  // Set email format to HTML


$mail->Subject = 'PRODUÇÃO DE VT';

$mail->Body    =  '<p>Texo1 :</p>'.$texto1.'\n';
$mail->Body   .=  '<p>Texo2 :</p>'.$texto2.'\n';
$mail->Body   .=  '<p>Texo3 :</p>'.$texto3.'\n';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';




if(!$mail->send()) {
	echo 'Ocorreu uma falha, e não pode ser enviado.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Pedido enviado com sucesso!';
	header("Location: index.php");
}
?>
