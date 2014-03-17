<? include_once($_SERVER [ 'DOCUMENT_ROOT' ] . '/includes/header.php'); ?>

        <?php if ($subHead !='') { echo "<span class='subHead'>$subHead</span>"; } ?>

        <? include('content.php'); ?>

<? if ($prototype) { include('includes/prototype.php'); }
    ?>

<? include_once($_SERVER [ 'DOCUMENT_ROOT' ] . '/includes/footer.php'); ?>