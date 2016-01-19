<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
for ($i=0; $i < ; $i++) {
$texto.$i = isset($_POST['texto'.$i]);
$caminho.$i = isset($_POST['caminho'.$i]);
}
$texto

$quebralina = '\n';

$nomeDoProduto                  = $_POST['nomeDoProduto'];
$caracteristicaDoProduto        = $_POST['caracteristicaDoProduto'];
$valorAvista                    = $_POST['valorAvista'];
$produto1 = $_FILES['caminho'];
$anexo2 = $_FILES['caminho'];



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

$mail->Body   .=  '<p>slogan da Empresa :</p>'.$sloganEmpresa.$quebralina;
$mail->Body   .=  '<p>Logomarca :</p>'.$logoEmpresa.$quebralina;


$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
  echo 'Ocorreu uma falha, e não pode ser enviado.';
} else {
  echo 'Pedido enviado com sucesso!';
}






?>
