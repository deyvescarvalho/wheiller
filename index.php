<?php require_once 'header.php';  ?>
      <form id="cadVt" name="formvalendo" method="POST" action="busca.php"  >
        <?php
        $quantidadeFormularios = 3;

        for ($i=0; $i < $quantidadeFormularios; $i++) {
        ?>
          <div class="form-group">
            <label for="opcINput">TEXTO <?php echo $i +1;  ?></label>
            <input type="text" name="texto<?php echo $i +1;  ?>" id="opcINput" class="txtAbertura form-control" placeholder="Inserir texto de abertura">
            <input type="file" name="caminho<?php echo $i+1;  ?>" class="form-control" id="arquivo" accept="image/*">

          </div>

          <br>
      <?php
        }
      ?>
        <input type="submit" id="salvar" name="button" class="btn btn-default"  value="Finalizar">
      </form>
<?php require_once 'footer.php';?>
