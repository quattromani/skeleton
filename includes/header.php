<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <? include_once($_SERVER [ 'DOCUMENT_ROOT' ] . '/includes/variables/global_variables.php'); ?>
    <? include_once('includes/variables/page_variables.php'); ?>
    <title><? echo $page_title; ?></title>
    <meta name="description" content="<?=$description?>">
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="viewport" content="width=device-width, minimal-ui">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />

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