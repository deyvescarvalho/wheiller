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



$opcaoVt = $_POST['opcaoVt'];
$txtAbertura = $_POST['txtAbertura'];
$nomeCampanha = $_POST['nomeCampanha'];
$dados = $_POST['dados'];

$sql = "INSERT INTO USUARIO (NOME, EMAIL, SENHA)
        VALUES ('$opcaoVt', '$txtAbertura', '$nomeCampanha')";
mysql_query($sql) or die(error());
$response = array("success" => true);
echo json_encode($response);



?>
