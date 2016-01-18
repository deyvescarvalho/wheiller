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

$opcaoVt          =     $_POST['opcaoVt'];
$textoDeAbertura  =     $_POST['txtAbertura'];
$nomeCampanha     =     $_POST['nomeCampanha'];

$nomeDoProduto                  = $_POST['nomeDoProduto'];
$caracteristicaDoProduto        = $_POST['caracteristicaDoProduto'];
$valorAvista                    = $_POST['valorAvista'];
$valorAprazo                    = $_POST['valorAprazo'];
$formaPagamento                 = $_POST['formaPagamento'];
$valorEntrada                   = $_POST['valorEntrada'];
$valorParcelas                  = $_POST['valorParcelas'];
$qtdParcelas                    = $_POST['qtdParcelas'];
$txtJuridico                    = $_POST['txtJuridico'];

$nomeDoProduto2           = $_POST['nomeDoProduto2'];
$caracteristicaDoProduto2 = $_POST['caracteristicaDoProduto2'];
$valorAvista2             = $_POST['valorAvista2'];
$valorAprazo2             = $_POST['valorAprazo2'];
$formaPagamento2          = $_POST['formaPagamento2'];
$valorEntrada2            = $_POST['valorEntrada2'];
$valorParcelas2           = $_POST['valorParcelas2'];
$qtdParcelas2             = $_POST['qtdParcelas2'];
$txtJuridico2             = $_POST['txtJuridico2'];

$nomeDoProduto3           = $_POST['nomeDoProduto3'];
$caracteristicaDoProduto3 = $_POST['caracteristicaDoProduto3'];
$valorAvista3             = $_POST['valorAvista3'];
$valorAprazo3             = $_POST['valorAprazo3'];
$formaPagamento3          = $_POST['formaPagamento3'];
$valorEntrada3            = $_POST['valorEntrada3'];
$valorParcelas3           = $_POST['valorParcelas3'];
$qtdParcelas3             = $_POST['qtdParcelas3'];
$txtJuridico3             = $_POST['txtJuridico3'];

$nomeEmpresa              = $_POST['nomeEmpresa'];
$enderecoEmpresa          = $_POST['enderecoEmpresa'];
$telefoneEmpresa          = $_POST['telefoneEmpresa'];
$sloganEmpresa            = $_POST['sloganEmpresa'];
$logoEmpresa           = $_POST['caminho'];



$sql   = "INSERT INTO vt30segundos(email_cliente, opcao_vt, texto_abertura";
$sql  .= ", nome_campanha, nmprod1, nmprod2, nmprod3, caracprod1, caracprod2, caracprod3";
$sql  .= ", valorvistaprod1, valorvistaprod2, valorvistaprod3, valorprazoprod1, valorprazoprod2, valorprazoprod3";
$sql  .= ", formapagamento1, formapagamento2, formapagamento3";
$sql  .= ", vlrentrada1, vlrentrada2, vlrentrada3";
$sql  .= ", vlrparcela1, vlrparcela2, vlrparcela3";
$sql  .= ", qtdparcela1, qtdparcela2, qtdparcela3";
$sql  .= ", textojuridico1, textojuridico2, textojuridico3";
$sql  .= ", nmempresa, enderecoempresa, telempresa, slogan)";
$sql  .= "VALUES('deyvescarvalho@gmail.com', '$opcaoVt', ' $textoDeAbertura',
' $nomeCampanha',' $nomeDoProduto',' $nomeDoProduto2',' $nomeDoProduto3',
' $caracteristicaDoProduto',' $caracteristicaDoProduto2',' $caracteristicaDoProduto3',
' $valorAvista',' $valorAvista2',' $valorAvista3',
' $valorAprazo',,' $valorAprazo2',' $valorAprazo3',
' $formaPagamento',' $formaPagamento2',' $formaPagamento3',
' $valorEntrada',' $valorEntrada2',' $valorEntrada3',
' $valorParcelas',' $valorParcelas2',' $valorParcelas3',
' $qtdParcelas',' $qtdParcelas2',' $qtdParcelas3',
' $txtJuridico',' $txtJuridico2',' $txtJuridico3',
' $nomeEmpresa',' $enderecoEmpresa',' $telefoneEmpresa', ' $sloganEmpresa')";
mysql_query($sql) or die(error());
$response = array("success" => true);
echo json_encode($response);



?>
