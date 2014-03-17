<? include_once($_SERVER [ 'DOCUMENT_ROOT' ] . '/includes/header.php'); ?>

        <?php if ($subHead !='') { echo "<span class='subHead'>$subHead</span>"; } ?>

        <? include('content.php'); ?>

<? include($_SERVER [ 'DOCUMENT_ROOT' ] . '/includes/prototype.php'); ?>

<? include_once($_SERVER [ 'DOCUMENT_ROOT' ] . '/includes/footer.php'); ?>