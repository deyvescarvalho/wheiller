<?php require_once 'header.php';?>
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
<?php require_once 'footer.php';?>