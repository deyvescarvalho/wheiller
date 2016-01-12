<?php
//Site: http://sourceforge.net/projects/phpmailer/files/phpmailer%20for%20php5_6/
include "class.phpmailer.php"; //caminho do arquivo da classe do phpmailer

$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->Host = "smtp.gmail.com"; //Endereço do seu Servidor de Email
$mail->SMTPAuth = true; // true se o email é autenticado
$mail->Username = "deyvescarvalho@gmail.com"; // Seu endereço de email que envia os email
$mail->Password = "abstratooi%#d"; // senha do usuário que envia o email
$mail->From = "deyvescarvalho@gmail.com"; a pessoa que ta enviando o email

$mail->FromName = "remetente"; Nome de quem ta enviando...
$mail->AddAddress("deyvescarvalho@gmail.com","Nome do Destinatario ");
$mail->AddAddress("email@destinatario"); // (opcional) só o envio pelo email
$mail->AddReplyTo("email@destinatario.copia","Nome do Destinatario para quem ira a resposta");

$mail->WordWrap = 50; // Quebra de linha
$mail->IsHTML(true); // Se for true é enviando email no formato HTML
$mail->Subject = "Assunto da mensagem "; //Assunto do seu Email
$mail->Body = "Conteúdo da mensagem HTML"; //Conteudo HTML
$mail->AltBody = "Para mensagens somente texto"; //Somente Texto

//Enviando o Email e tento a confirmação se foi ou não ...
if(!$mail->Send())
{
    echo "Aconteceu algum problema no envio da Mensagem: ";
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "E-mail enviado com sucesso...";
}
 ?>
