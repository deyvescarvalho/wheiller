<?php require_once 'header.php';?>
<h1 class="text-center"> ABERTURA DO VÍDEO</h1>
<section class="container-fluid">
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
<?php require_once 'footer.php';?>
