<?php
// require "PHPMailer-FE_v4.11/phpmailer-fe.php";
//
// $conect = mysql_connect("localhost", "root", "deyves");
// // Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
// if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");
// // Caso a conexão seja aprovada, então conecta o Banco de Dados.
// $db = mysql_select_db("ajaxphp");
// /*Configurando este arquivo, depois é só você dar um include em suas paginas php,
// isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados você altera
// somente um arquivo*/
// $select = "SELECT * FROM USUARIO
// order by ID_USUARIO DESC
// limit 1";
// $result = mysql_query($select); //resultado do select
// //Enquanto existir usuários no banco ele insere uma nova linha e exibe os dados
// while ($row = mysql_fetch_array($result)) {
//   $id = $row['ID_USUARIO'];
//   $nome = $row['NOME'];
//   $email = $row['EMAIL'];
//   $senha = $row['SENHA'];
//   echo" <td>$id</td>";
//   echo" <td>$nome</td>";
//   echo" <td>$email</td>";
//   echo" <td>$senha</td>";
// }
//
// $quebra_linha = "\n";
// $emailsender = "deyvescarvalho@gmail.com";
// $nomeremetente = "Email";
// $emaildestinatario = "deyvescarvalho@gmail.com";
// $comcopia = "deyvescarvalho@gmail.com";
// $comcopiaoculta = "deyvescarvalho@gmail.com";
// $assunto = "teste";
// $mensagem = "conteudo";
//
// $mensagemHTML = '<p>teste</p>';

// $headers = "MIME-Version: 1.1".$quebra_linha;
// $headers = "Content-type: text/plain; charset=iso-8859-1".$quebra_linha;
// $headers = "From: ".$emailsender.$quebra_linha;
// $headers = "Return-Path: ".$emailsender.$quebra_linha;
// $headers = "Cc: ".$comcopia.$quebra_linha;
// $headers = "Bcc: ".$comcopiaoculta.$quebra_linha;
// $headers = "Reply-To: ".$emailsender.$quebra_linha;


require '/vendor/autoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

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
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    print "asdasd";
}

?>
