<?php
require __DIR__ . '/header.php';
?>
<div class="row">
    <div class="col-md-3">
        <?php require __DIR__ . '/sidebar.php'; ?>
    </div>
    <div class="col-md-9">
        <?php if (isset($content)) echo $content; ?>
    </div>
</div>
<?php
require __DIR__ . '/footer.php';
