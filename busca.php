<?php

//conexão com o servidor
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
 ?>
