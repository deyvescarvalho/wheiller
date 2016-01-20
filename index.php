<?php require_once 'header.php';  ?>
      <form id="cadVt" name="formvalendo" method="POST" action="busca.php"  >
          <div class="form-group">
            <label for="opcINput">TEXTO 1</label>
            <input type="text" name="texto1" id="opcINput" class="txtAbertura form-control" placeholder="Inserir texto de abertura">
            <input type="file" name="anexo1" class="form-control" id="arquivo" accept="image/*">
          </div>
          <br>
          <div class="form-group">
            <label for="opcINput">TEXTO 2</label>
            <input type="text" name="texto2" id="opcINput" class="txtAbertura form-control" placeholder="Inserir texto de abertura">
            <input type="file" name="anexo2" class="form-control" id="arquivo" accept="image/*">
          </div>
          <br>
          <div class="form-group">
            <label for="opcINput">TEXTO 3</label>
            <input type="text" name="texto3" id="opcINput" class="txtAbertura form-control" placeholder="Inserir texto de abertura">
            <input type="file" name="anexo3" class="form-control" id="arquivo" accept="image/*">
          </div>
          <br>
        <input type="submit" id="salvar" name="button" class="btn btn-default"  value="Finalizar">
      </form>
<?php require_once 'footer.php';?>
