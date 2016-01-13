<?php


$conect = mysql_connect("localhost", "root", "deyves");
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");
// Caso a conexão seja aprovada, então conecta o Banco de Dados.
$db = mysql_select_db("ajaxphp");
/*Configurando este arquivo, depois é só você dar um include em suas paginas php,
isto facilita muito, pois caso haja necessidade de mudar seu Banco de Dados você altera
somente um arquivo*/
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
}

include("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host   =   "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = 'deyvescarvalho@gmail.com';
$mail->Password = 'abstratooi%#d';


$mail->From = "deyvescarvalho@gmail.com";
$mail->FromName = "Deyves";


$mail->AddAddress($mail, $nome);
$mail->AddCC('deyvescarvalho@gmail.com', 'eu');

$mail->IsHTML(true);


$mail->Subject = "Mensaem do site";
$mail->Body = 'teste de envio';


$enviado = $mail->Send();
var_dump($enviado);
if ($enviado) {
  echo "<h1>Email enviado</h1>";
}else {
  echo "Nao enviou email";
}



 ?>
