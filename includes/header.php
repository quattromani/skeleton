<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <? include_once($_SERVER [ 'DOCUMENT_ROOT' ] . '/includes/variables/global_variables.php'); ?>
    <title><? echo $title; ?></title>
    <meta name="description" content="<?=$description?>">
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="viewport" content="width=device-width, minimal-ui">
    <meta name="format-detection" content="telephone=no">

<? if (file_exists('images/apple-touch-icon.png')) { echo '<link href="images/apple-touch-icon.png" rel="apple-touch-icon">'. PHP_EOL; }

   if (file_exists('images/apple-touch-icon-76x76.png')) { echo '<link href="images/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">'. PHP_EOL; }

   if (file_exists('images/apple-touch-icon-120x120.png')) { echo '<link href="images/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">'. PHP_EOL; }

   if (file_exists('images/apple-touch-icon-152x152.png')) { echo '<link href="images/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">'. PHP_EOL; } ?>

    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="stylesheet" href="/css/fonts/font-awesome.min.css">
    <link rel="stylesheet" id="printCSS" media="print" href="/css/print.css">
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>

</head>

<body class="<? echo $page_class; ?>">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Begin Content Wrapper -->
    <div class="content">
        <div class="container">