<h1><? echo ucfirst($project); ?> Style Guide</h1>

<hr>
<p>Version: <? echo($version); ?> -- Updated: <? echo($project_date); ?></p>
<hr>

<!-- Loop through and include all styleguide sections -->
<!-- TODO // add true/false variables to project/includes/global_variables.php -->

<? include('about/content.php'); ?>

<? include('colors/content.php'); ?>

<? include('typography/content.php'); ?>

<? include('lists/content.php'); ?>

<? include('breadcrumbs/content.php'); ?>

<? include('pagination/content.php'); ?>

<? include('buttons/content.php'); ?>

<? include('grid/content.php'); ?>

<? include('forms/content.php'); ?>

<? include('tables/content.php'); ?>

<? include('images/content.php'); ?>

<? include('video/content.php'); ?>

<? include('audio/content.php'); ?>

<? include('best_practices/content.php'); ?>

  <h2>FIN.</h2>