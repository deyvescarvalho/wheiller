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
$Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
$Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
$Email		= $_POST["Email"];	// Pega o valor do campo Email
$Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem

// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "Nome: 'deyves'\n\nE-mail: 'deyvescarvalho@gmail.com'\n\nTelefone: '456'\n\nMensagem: 'asdda'\n";

require_once("phpmailer-fe.php");

define('GUSER', 'deyvescarvalho@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'abstratooi%#dka');		// <-- Insira aqui a senha do seu GMail

function smtpmailer('deyvescarvalho@gmail.com', 'deyvescarvalho@gmail.com', 'deyvescarvalho@gmail.com', 'asda', 'aaaaaa') {
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom('deyvescarvalho@gmail.com', 'deyvescarvalho@gmail.com');
	$mail->Subject = 'asd';
	$mail->Body = 'aaaaa';
	$mail->AddAddress('deyvescarvalho@gmail.com');
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER),
// o nome do email que envia a mensagem,
// o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer('deyvescarvalho@gmail.com', 'deyvescarvalho@gmail.com', 'Nome do Enviador', 'Assunto do Email', $Vai)) {

	Header("location:http://54.94.230.223"); // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;
?>
