<?

  $project = basename(dirname(dirname($_SERVER['PHP_SELF'])));
  $project_root = '/' . basename(dirname(dirname($_SERVER['PHP_SELF']))) .'/';
  $project_title = $_SERVER['DOCUMENT_ROOT'] . '/' . $project . '/';

?>