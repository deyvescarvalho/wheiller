<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

 $conect = mysql_connect("localhost", "root", "deyves");
 // Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
 if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");
 // Caso a conexão seja aprovada, então conecta o Banco de Dados.
 $db = mysql_select_db("ajaxphp");
 /*Configurando este arquivo, depois é só você dar um include em suas paginas php,
 isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados você altera
 somente um arquivo*/



 $sql = "INSERT INTO USUARIO (NOME, EMAIL, SENHA)
         VALUES ('$opcaoVt', '$txtAbertura', '$nomeCampanha')";
 mysql_query($sql) or die(error());
 $response = array("success" => true);
 echo json_encode($response);



 $select = "SELECT * FROM USUARIO
 order by ID_USUARIO DESC
 limit 1";
 $result = mysql_query($select); //resultado do select
 //Enquanto existir usuários no banco ele insere uma nova linha e exibe os dados
 while ($row = mysql_fetch_array($result)) {
   $id = $row['ID_USUARIO'];
   $nome = $row['NOME'];
   $email = $row['EMAIL'];
   $senha = $row['SENHA'];
   echo" <td>$id</td>";
   echo" <td>$nome</td>";
   echo" <td>$email</td>";
   echo" <td>$senha</td>";

     $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$quebralina = '\n';
$opcaoVt = $_POST['opcaoVt'];
$txtAbertura = $_POST['txtAbertura'];
$nomeCampanha = $_POST['nomeCampanha'];

$dadosOfertas = json_decode($_POST['dados']);
     $response = array("success" => true);
     echo json_encode($response);
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
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/images/cliImg/img'.$id, 'new.jpg');    // Optional name
     $mail->isHTML(true);                                  // Set email format to HTML

     $mail->Subject = 'Here is the subject '.$id;
     $mail->Body    = '<p>Opção do VT :</p> '.$opcaoVt.$quebralina
      $mail->Body   .= '<p>Texto de abertura :</p>'.$txtAbertura.$quebralina
      $mail->Body   .=  '<p>Nome da campanha :</p>'. $nomeCampanha.$quebralina


                      $ofertas;
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     if(!$mail->send()) {
         echo 'Message could not be sent.';
         print 'Mailer Error: ' . $mail->ErrorInfo;
     } else {
         echo 'Message has been sent';
         print "asdasd";
     }

 }




?>
