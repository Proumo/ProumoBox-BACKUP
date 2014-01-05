<?php require 'header.php'; ?>
<div class="container">
    <div class="row">
        <div id="lista_apps" class="span3"> <div class="well"> <?php require 'tmp_espaco_criacao/lista_apps.php'; ?></div></div>
        <div id="bbapp_frame" class="span9"> <div class="well"> <?php require 'tmp_espaco_criacao/bbapp_frame.php'; ?></div></div>
    </div>
    <div class="row">
        <div id="meus_arquivos" class="span3"> <div class="well"> <?php require 'tmp_espaco_criacao/carrinho_apps.php'; ?></div></div>
        <div id="file_preview" class="span9"> <div class="well"> <?php require 'tmp_espaco_criacao/file_preview.php'; ?></div></div>
    </div>
</div>
<?php require 'footer.php'; ?>