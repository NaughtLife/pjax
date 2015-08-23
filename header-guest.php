<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <title><?php wp_title( '|', true, 'right' ); ?>Golmic</title>
    <meta charset="UTF-8" />
    <link href="http://cdn.bootcss.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/styles/default.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.pjax.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/browser.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.pjax({
            selector: 'a[target!="_blank"],a[href="^[!#]"]',
            container: '#main', //内容替换的容器
            cache: 100*60, //秒
            storage: true,
            show: 'fade',
            titleSuffix: ' | Golmic'
        });
    });
    new WOW().init();
    </script>
</head>
<body onload="init()">
    <?php include('loading-begin.php'); ?>
        <div class="container">
            <?php include('top.php'); ?>
                <div class="row">
                    <div id='main' class="col-lg-10 col-lg-offset-1">
