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
                <!--<form action="https://docs.google.com/forms/d/1emVAW8pFEVZkBW6EcuiKfR3iD4NYdllzBWH9EJQ9jEA/formResponse" method="POST" id="ss-form" target="_self" onsubmit=""><ol role="list" class="ss-question-list" style="padding-left: 0">
                        <div class="ss-form-question errorbox-good" role="listitem">
                            <div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
                                    <label class="ss-q-item-label" for="entry_1291440366"><div class="ss-q-title">NOme
                                        </div>
                                        <div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
                                    <input type="text" name="entry.1291440366" value="" class="form-control ss-q-short" id="entry_1291440366" dir="auto" aria-label="teste  Precisa conter " pattern=".*.*" title="Precisa conter ">
                                    <div class="error-message" id="228738580_errorMessage">Precisa conter </div>
                                    <div class="required-message">Esta pergunta é obrigatória</div>
                                </div></div></div>
                        <input type="hidden" name="draftResponse" value="[,,&quot;-4670871543912045324&quot;]
">
                        <input type="hidden" name="pageHistory" value="0">

                        <input type="hidden" name="fvv" value="0">


                        <input type="hidden" name="fbzx" value="-4670871543912045324">

                        <div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
                                        <input type="submit" name="submit" value="Enviar" id="ss-submit" class="jfk-button jfk-button-action ">
                                        <div class="ss-password-warning ss-secondary-text">Nunca envie senhas pelo Formulários Google.</div></td>
                                </tr></tbody></table></div></ol></form>-->
                <input onclick="guardadados();" type="radio" id="opc1"  name="opcaoVt" value="opcao1"> Escolher
            </div>
        </article>
    </div>
    <br>
    <div class="row">
        <a href="passo2.php" style="float: right;" class="btn btn-default">Já escolhi >></a>
    </div>
</section>
<?php require_once 'footer.php';?>
