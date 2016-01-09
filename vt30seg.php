<?php require_once 'header.php';?>
<h1 class="pass1 text-center">Opções de Vídeo</h1>
<section class="pass1 container-fluid">
  <div class="row">
    <form action="postar.php" method="post">
    <article class="escolhaVideo col-lg-3">
      <div class="fotoVideo">
        <video controls>
          <source src="videos/Javel.webm" type="video/webm">
            Your browser does not support the video tag.
          </video>
          <input type="radio"  id="vt1" class="tipodovt" name="opcaoVt" value="vt01"> Escolher
        </div>
      </article>
      <div class="fotoVideo">
        <video controls>
          <source src="videos/Javel.webm" type="video/webm">
            Your browser does not support the video tag.
          </video>
          <input type="radio"  id="vt2" class="tipodovt" name="opcaoVt" value="vt02"> Escolher
        </div>
      </article>
      <div class="fotoVideo">
        <video controls>
          <source src="videos/Javel.webm" type="video/webm">
            Your browser does not support the video tag.
          </video>
          <input type="radio"  id="vt3" class="tipodovt" name="opcaoVt" value="vt03"> Escolher
        </div>
      </article>
    </div>
    <br>
    <div class="row">
      <button type="button" id="btn1" name="button" style="float: right;" class="btn btn-default"> Avançar</button>
    </div>
  </section>

  <h1 class="pass2 text-center"> ABERTURA DO VÍDEO</h1>
  <section class="pass2 container-fluid passo2">
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
            <input type="text" name="txtAbertura" id="opcINput" class="txtAbertura form-control" placeholder="Inserir texto de abertura">
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
          <button type="button" id="btn2" name="button" style="float: right;" class="btn btn-default"> Avançar</button>
        </div>
      </section>


      <h1 class="pass3 text-center"> NOME DA CAMPANHA</h1>
      <section class="pass3 container-fluid passo3">
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
            <input type="text" class="nomeCampanha form-control" id="opc" placeholder="Inserir texto de abertura">
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
          <button type="button" id="btn3" name="button" style="float: right;" class="btn btn-default"> Avançar</button>
        </div>
      </section>


      <h1 class="pass4 text-center"> OFERTA 1</h1>
      <section class="pass4 container-fluid passo4">
        <div class="row">
          <div class="containerForm">
            <!-- <form action="" name="oferta1"> -->
              <div class="form-group col-md-6">
                <input type="text" id="nmProduto" placeholder="Nome do Produto" class="txtoferta1 oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="caracProduto" placeholder="Características do produto" class="oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="vlrAvistaProduto" placeholder="Valor do produto a vista" class="oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="vlrPrazo" placeholder="Valor do produto a prazo" class="oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="formaPagamento" placeholder="Forma de pagamento" class="oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="vlrEntrada" placeholder="Valor de entrada" class="oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="vlrParcelas" placeholder="Valor das parcelas" class="oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="qtdParcelas" placeholder="Quantidade de parcelas" class="oferta form-control">
              </div>
              <div class="form-group col-md-12">
                <textarea name="txtJuridico" id="textoJuridico" placeholder="Texto Jurídico" class="oferta form-control" style="resize: none;" rows="6"></textarea>
              </div>
            <!-- </form> -->
          </div>
        </div>
        <br>
        <div class="row">
          <h4 class="col-md-4 col-md-offset-4 text-center" style="color: #802420;">ATENÇÃO: Ao digitar o texto tenha lembre que a leitura deste texto não pode ultrapassar 5 segundos.</h4>
        </div>
        <div class="row">
          <button type="button" id="btn4" name="button" style="float: right;" class="btn btn-default"> Avançar</button>
        </div>
      </section>


      <h1 class="pass5 text-center"> OFERTA 2</h1>
      <section class="pass5 container-fluid oferta2">
        <div class="row">
          <div class="containerForm">
            <!-- <form action="" name="oferta1"> -->
              <div class="form-group col-md-6">
                <input type="text" id="nmProduto" placeholder="Nome do Produto" class="txtoferta2 oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="caracProduto" placeholder="Características do produto" class="oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="vlrAvistaProduto" placeholder="Valor do produto a vista" class="oferta form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="vlrPrazo" placeholder="Valor do produto a prazo" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="formaPagamento" placeholder="Forma de pagamento" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="vlrEntrada" placeholder="Valor de entrada" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="vlrParcelas" placeholder="Valor das parcelas" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" id="qtdParcelas" placeholder="Quantidade de parcelas" class="form-control oferta">
              </div>
              <div class="form-group col-md-12">
                <textarea name="txtJuridico" id="textoJuridico" placeholder="Texto Jurídico" class="form-control oferta" style="resize: none;" rows="6"></textarea>
              </div>
            <!-- </form> -->
          </div>
        </div>
        <br>
        <div class="row">
          <h4 class="col-md-4 col-md-offset-4 text-center" style="color: #802420;">ATENÇÃO: Ao digitar o texto tenha lembre que a leitura deste texto não pode ultrapassar 5 segundos.</h4>
        </div>
        <div class="row">
          <button type="button" id="btn5" name="button" style="float: right;" class="btn btn-default"> Avançar</button>
        </div>
      </section>


      <h1 class="pass6 text-center"> OFERTA 3</h1>
      <section class="pass6 container-fluid">
        <div class="row">
          <div class="containerForm">
            <!-- <form action="" name="oferta3"> -->
              <div class="form-group col-md-6">
                <input type="text" placeholder="Nome do Produto" class="form-control oferta txtoferta3">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Características do produto" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Valor do produto a vista" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Valor do produto a prazo" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Forma de pagamento" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Valor de entrada" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Valor das parcelas" class="form-control oferta">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Quantidade de parcelas" class="form-control oferta">
              </div>
              <div class="form-group col-md-12">
                <textarea name="txtJuridico" id="textoJuridico" placeholder="Texto Jurídico" class="form-control oferta" style="resize: none;" rows="6"></textarea>
              </div>
            <!-- </form> -->
          </div>
        </div>
        <br>
        <div class="row">
          <h4 class="col-md-4 col-md-offset-4 text-center" style="color: #802420;">ATENÇÃO: Ao digitar o texto tenha lembre que a leitura deste texto não pode ultrapassar 5 segundos.</h4>
        </div>
        <div class="row">
          <button type="button" id="btn6" name="button" style="float: right;" class="btn btn-default"> Avançar</button>
        </div>
      </section>

      <h1 class="pass7 text-center">Dados da assinatura</h1>
      <section class="pass7 container-fluid">
        <div class="row">
          <div class="containerForm">
            <!-- <form action="" name="oferta1"> -->
              <div class="form-group col-md-6">
                <input type="text" placeholder="Nome da empresa" class="dadoEmpresa txtEmpresaDado form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Endereço" class="dadoEmpresa form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Telefone" class="dadoEmpresa form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="text" placeholder="Slogan" class="dadoEmpresa form-control">
              </div>
              <div class="inputFile form-group col-md-6">
                <input type="file" class="form-control" name="arquivo" id="arquivo" accept="image/*">
              </div>
            <!-- </form> -->
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
            <button type="button" id="btn7" name="button" style="float: right;" class="btn btn-default"> Avançar</button>
          </div>
        </section>
</form>

        <script>
        $(document).ready(function(){
          $("#btn1").click(function(){
            $('.tipodovt').each(function(){
              if ($(this).is(':checked')) {
                nome = $(this).val();
              };
            })
            console.log(nome);
            $(".pass2").show();
            $(".pass1").hide();
            $('.txtAbertura').focus();
          });
          $("#btn2").click(function(){

            textoAbertura = $(".txtAbertura").val();
            console.log(textoAbertura);
            $(".pass3").show();
            $(".pass2").hide();
            $('.nomeCampanha').focus();
          });
          $("#btn3").click(function(){
            var nomeCampanha = $(".nomeCampanha").val();
            console.log(nomeCampanha);
            $(".pass4").show();
            $(".pass3").hide();
            $('.txtoferta1').focus();
          });
          $("#btn4").click(function(){
            $(".pass5").show();
            $(".pass4").hide();
            $('.txtoferta2').focus();
          });
          $("#btn5").click(function(){
            $(".pass6").show();
            $(".pass5").hide();
            $('.txtoferta3').focus();
          });
          $("#btn6").click(function(){
            var oferta = [];
            $(".oferta").each(function(){
              oferta.push($(this).val());
            });
            console.log(oferta);
            $(".pass7").show();
            $(".pass6").hide();
            $('.txtEmpresaDado').focus();
          });
          $("#btn7").click(function(){
            var dadoEmpresa = [];
            $(".dadoEmpresa").each(function(){
              dadoEmpresa.push($(this).val());
            });
            console.log(dadoEmpresa);
          });
        });
        </script>
        <?php require_once 'footer.php';?>
