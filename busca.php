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

$destinatario = "deyvescarvalho@gmail.com";
$assunto = "Esta mensagem é um teste";
$corpo = '
<html>
<head>
  <title>Teste de correio</title>
</head>
<body>
<h1>Olá amigos!</h1>
<p>
<b>Bem-vindos ao meu correio electrónico de teste</b>. Estou contente de ter tantos leitores.
</p>
</body>
</html>
';

//para o envio em formato HTML
$headers = "MIME-Version: 1.0
";
$headers .= "Content-type: text/html;
charset=iso-8859-1
";

//endereço do remitente
$headers .= "From: Xuxé <deyvescarvalho@hotmail.com>
";

//endereço de resposta, se queremos que seja diferente a do remitente
$headers .= "Reply-To: deyvescarvalho@hotmail.com
";

//endereços que receberão uma copia $headers .= "Cc: manel@desarrolloweb.com

//endereços que receberão uma copia oculta
$headers .= "Bcc: deyvescarvalho@gmail.com
";
try {
  mail($destinatario,$assunto,$corpo,$headers);
} catch (Exception $e) {
  print "O erro". $e;
}


?>
