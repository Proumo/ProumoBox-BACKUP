<?php require 'header.php'; ?>
<div class="container">
    <div class="row">
        <?php require 'tmp_sdk/sdk_header.php'; ?>
    </div>
</div>

<div id="sdk_container" class="container">
    <div class="row">
        <?php require 'tmp_sdk/arvore_diretorios.php'; ?>
        <?php require 'tmp_sdk/arquivo_editor.php'; ?>
    </div>

    <div class="row">
        <?php require 'tmp_sdk/console.php'; ?>
    </div>
</div>
<?php require 'footer.php'; ?>