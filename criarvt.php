<?php require_once 'header.php'; ?>


<h1 class="pass1 text-center">Opções de Vídeo</h1>
<section class="pass1 container-fluid">
  <div class="row">
    <form action="" id="cadVt">
      <article class="escolhaVideo col-lg-3">
        <div class="fotoVideo">
          <video controls>
            <source src="videos/Javel.webm" type="video/webm">
              Your browser does not support the video tag.
            </video>
            <input type="text" name="nomeCampanha">
            <input type="radio"  id="vt1" class="tipodovt" name="opcaoVt" value="vt01"> Escolher
          </div>
        </article>
        <article class="escolhaVideo col-lg-3">
          <div class="fotoVideo">
            <video controls>
              <source src="videos/Javel.webm" type="video/webm">
                Your browser does not support the video tag.
              </video>
              <input type="text" name="nomeCampanha">
              <input type="radio"  id="vt1" class="tipodovt" name="opcaoVt" value="vt02"> Escolher
            </div>
          </article>
      </form>
    </div>
    <br>
    <div class="row">
      <button type="button" id="btn1" name="button" style="float: right;" class="btn btn-default"> Avançar</button>
    </div>
  </section>


  <?php require 'busca.php'; ?>

  <input type="button" id="salvar" value="salvar">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

  <script type="text/javascript" language="javascript">
  $(document).ready(function() {
    /// Quando usuário clicar em salvar será feito todos os passo abaixo
    $('#salvar').click(function() {
      var dados = $('#cadVt').serialize();

      $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'salvar.php',
        async: true,
        data: dados,
        success: function(response) {
          location.reload();

        }
      });
      return false;
    });
  });

  </script>

  <?php require_once 'footer.php'; ?>
