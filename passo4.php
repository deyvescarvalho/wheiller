<?php require_once 'header.php';?>
    <h1 class="text-center"> OFERTA 1</h1>
    <section class="container-fluid">
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
<?php require_once 'footer.php';?>