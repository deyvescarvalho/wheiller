<?php require_once 'header.php';?>
<h1 class="text-center">Opções de Vídeo</h1>
<section class="container-fluid">
  <div class="row">
    <article class="escolhaVideo col-lg-3">
      <div class="fotoVideo">
        <video controls>
          <source src="videos/Javel.webm" type="video/webm">
            Your browser does not support the video tag.
          </video>
          <input type="radio" id="opcaoVt01"  name="opcaoVt" value="opcao1"> Escolher
        </div>
      </article>
    </div>
    <br>
    <div class="row">
      <a href="passo2.php" style="float: right;" class="btn btn-default">Já escolhi >></a>
    </div>
  </section>

  <h1 class="text-center"> ABERTURA DO VÍDEO</h1>
  <section class="container-fluid passo2">
    <div class="row">
      <aside>
        <div class="col-md-3 col-md-offset-2 ladoesq">
          <br>
          <p>Exemplo de animação do texto de abertura</p>
          <img class="col-md-12" src="images/maintv-u1905-fr.png" alt="">
        </div>
      </aside>
      <aside class="ladodir col-md-6">
        <h3>Digite o texto de abertura do seu vídeo:</h3>
        <input type="text" name="inputtxt" id="opcINput" class="txt1 form-control" placeholder="Inserir texto de abertura">
        <br>
        <div class="containerAjuda">
          <p>Se você não sabe que texto utilizar, temos alguns exemplos:</p>
          <p>Venha para nome da sua empresa...  |   Corra para nome da sua empresa    A nome da sua empresa está liquidando tudo...  |   A nome da sua empresa está queimando tudo... |   Agora é a hora na nome da sua empresa...</p>
        </div>
      </aside>
    </div>
    <br>
    <div class="row">
      <h4 class="col-md-4 col-md-offset-4 text-center" style="color: #802420;">ATENÇÃO: Ao digitar o texto tenha lembre que a leitura deste texto não pode ultrapassar 3 segundos.</h4>
    </div>
    <div class="row">
      <a href="passo3.php" onclick="guardadados2()" style="float: right;" class="btn btn-default">Pŕoximo >></a>
    </div>
  </section>


  <h1 class="text-center"> NOME DA CAMPANHA</h1>
  <section class="container-fluid passo3">
    <div class="row">
      <aside>
        <div class="col-md-3 col-md-offset-2 ladoesq">
          <br>
          <p>Exemplo de animação do texto da campanha</p>
          <img class="col-md-12" src="images/maintv-u1905-fr.png" alt="">
        </div>
      </aside>
      <aside class="ladodir col-md-6">
        <h3>Digite o nome da campanha:</h3>
        <input type="text" class="form-control" id="opc" placeholder="Inserir texto de abertura">
        <br>
        <div class="containerAjuda">
          <p>Se você não sabe que texto utilizar, temos alguns exemplos:</p>
        </div>
      </aside>
    </div>
    <br>
    <div class="row">
      <h4 class="col-md-4 col-md-offset-4 text-center" style="color: #802420;">ATENÇÃO: Ao digitar o texto tenha lembre que a leitura deste texto não pode ultrapassar 5 segundos.</h4>
    </div>
    <div class="row">
      <a href="passo4.php" style="float: right;" onclick="guardadados3()" class="btn btn-default">Pŕoximo >></a>
    </div>
  </section>


  <h1 class="text-center"> OFERTA 1</h1>
  <section class="container-fluid passo4">
    <div class="row">
      <div class="containerForm">
        <form action="" name="oferta1">
          <div class="form-group col-md-6">
            <input type="text" id="nmProduto" placeholder="Nome do Produto" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="caracProduto" placeholder="Características do produto" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="vlrAvistaProduto" placeholder="Valor do produto a vista" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="vlrPrazo" placeholder="Valor do produto a prazo" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="formaPagamento" placeholder="Forma de pagamento" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="vlrEntrada" placeholder="Valor de entrada" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="vlrParcelas" placeholder="Valor das parcelas" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="qtdParcelas" placeholder="Quantidade de parcelas" class="form-control">
          </div>
          <div class="form-group col-md-12">
            <textarea name="txtJuridico" id="textoJuridico" placeholder="Texto Jurídico" class="form-control" style="resize: none;" rows="6"></textarea>
          </div>
        </form>
      </div>
    </div>
    <br>
    <div class="row">
      <h4 class="col-md-4 col-md-offset-4 text-center" style="color: #802420;">ATENÇÃO: Ao digitar o texto tenha lembre que a leitura deste texto não pode ultrapassar 5 segundos.</h4>
    </div>
    <div class="row">
      <a href="oferta2.php" onclick="guardadados4()" style="float: right;" class="btn btn-default">Pŕoximo >></a>
    </div>
  </section>


  <h1 class="text-center"> OFERTA 2</h1>
  <section class="container-fluid oferta2">
    <div class="row">
      <div class="containerForm">
        <form action="" name="oferta1">
          <div class="form-group col-md-6">
            <input type="text" id="nmProduto" placeholder="Nome do Produto" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="caracProduto" placeholder="Características do produto" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="vlrAvistaProduto" placeholder="Valor do produto a vista" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="vlrPrazo" placeholder="Valor do produto a prazo" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="formaPagamento" placeholder="Forma de pagamento" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="vlrEntrada" placeholder="Valor de entrada" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="vlrParcelas" placeholder="Valor das parcelas" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" id="qtdParcelas" placeholder="Quantidade de parcelas" class="form-control">
          </div>
          <div class="form-group col-md-12">
            <textarea name="txtJuridico" id="textoJuridico" placeholder="Texto Jurídico" class="form-control" style="resize: none;" rows="6"></textarea>
          </div>
        </form>
      </div>
    </div>
    <br>
    <div class="row">
      <h4 class="col-md-4 col-md-offset-4 text-center" style="color: #802420;">ATENÇÃO: Ao digitar o texto tenha lembre que a leitura deste texto não pode ultrapassar 5 segundos.</h4>
    </div>
    <div class="row">
      <a href="oferta3.php" onclick="guardadados4()" style="float: right;" class="btn btn-default">Pŕoximo >></a>
    </div>
  </section>


  <h1 class="text-center"> OFERTA 3</h1>
  <section class="container-fluid">
    <div class="row">
      <div class="containerForm">
        <form action="" name="oferta3">
          <div class="form-group col-md-6">
            <input type="text" placeholder="Nome do Produto" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Características do produto" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Valor do produto a vista" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Valor do produto a prazo" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Forma de pagamento" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Valor de entrada" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Valor das parcelas" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Quantidade de parcelas" class="form-control">
          </div>
          <div class="form-group col-md-12">
            <textarea name="txtJuridico" id="textoJuridico" placeholder="Texto Jurídico" class="form-control" style="resize: none;" rows="6"></textarea>
          </div>
        </form>
      </div>
    </div>
    <br>
    <div class="row">
      <h4 class="col-md-4 col-md-offset-4 text-center" style="color: #802420;">ATENÇÃO: Ao digitar o texto tenha lembre que a leitura deste texto não pode ultrapassar 5 segundos.</h4>
    </div>
    <div class="row">
      <a href="dadosempresa.php" onclick="guardadados4()" style="float: right;" class="btn btn-default">Pŕoximo >></a>
    </div>
  </section>

  <h1 class="text-center">Dados da assinatura</h1>
  <section class="container-fluid">
    <div class="row">
      <div class="containerForm">
        <form action="" name="oferta1">
          <div class="form-group col-md-6">
            <input type="text" placeholder="Nome da empresa" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Endereço" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Telefone" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <input type="text" placeholder="Slogan" class="form-control">
          </div>
          <div class="inputFile form-group col-md-6">
            <input type="file" class="form-control" name="arquivo" id="arquivo" accept="image/*">
          </div>
        </form>
      </div>
    </div>
    <br>
    <h4>Saiba mais:</h4>

    <p>O nome da empresa na assinatura é essencial para o seu cliente identificar o local de compra. A divulgação do número de telefone é importante para o seu cliente obter informações sobre produtos (porém se a sua empresa não tem bom atendimento telefônico é melhor não divulgar para não criar uma imagem negativa da empresa). O endereço é útil se sua divullgação for em grandes centros ou se for um empresa nova no mercado. O Slogan é um texto que fortalece e identifica sua empresa com  uma determinada característica.
      Exemplos: Casa de amigos  |  Aqui você tem o menor preço!   |   O melhor pra você!   |     A cerveja que desce redondo.   |   1001 utilidades   |   Não tem comparação   |   Essa é real   |   Amo muito tudo isso!   |   A batata da onda   |   A gente se liga em você.</p>
      <br>
      <div class="row">
        <h4 class="col-md-4 col-md-offset-4 text-center" style="color: #802420;">ATENÇÃO: Ao digitar o texto tenha lembre que a leitura deste texto não pode ultrapassar 5 segundos.</h4>
      </div>
      <div class="row">
        <a href="oferta2.html" style="float: right;" class="btn btn-default">Pŕoximo >></a>
      </div>
    </section>



    <?php require_once 'footer.php';?>
