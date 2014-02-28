<?php include('../config.php'); ?>
<?php include($project_title . 'includes/header.php'); ?>

<h1><? echo ucfirst($project); ?> Style Guide</h1>

<hr>
<p>Version: <? echo($version); ?> -- Updated: <? echo($project_date); ?></p>
<hr>

<!-- Loop through and include all styleguide sections -->
<!-- TODO // add true/false variables to project/includes/global_variables.php -->

<?php if ($about) { include('about/index.php'); } ?>

<?php if ($colors) { include('colors/index.php'); } ?>

<?php if ($typography) { include('typography/index.php'); } ?>

<?php if ($lists) { include('lists/index.php'); } ?>

<?php if ($breadcrumbs) { include('breadcrumbs/index.php'); } ?>

<?php if ($pagination) { include('pagination/index.php'); } ?>

<?php if ($buttons) { include('buttons/index.php'); } ?>

<?php if ($grid) { include('grid/index.php'); } ?>

<?php if ($forms) { include('forms/index.php'); } ?>

<?php if ($audio) { include('tables/index.php'); } ?>

<?php if ($images) { include('images/index.php'); } ?>

<?php if ($video) { include('video/index.php'); } ?>

<?php if ($audio) { include('audio/index.php'); } ?>

<?php if ($best_practices) { include('best_practices/index.php'); } ?>

  <h2>FIN.</h2>

  <?php include($project_title .'includes/footer.php'); ?>