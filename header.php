<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="author" content="John Earl Hardesty">

    <!-- bootstrap styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/74abbf3163.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/static-assets/tt-icon-16px.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/static-assets/tt-icon-32px.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/static-assets/tt-icon-64px.png">
    <link rel="apple-touch-icon" type="image/png" href="/static-assets/tt-icon-apple.png">
    <!-- local styles -->
    <link rel="stylesheet" href="/static-assets/turquoise.css">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- masthead -->
<div class="masthead-wide masthead">
    <div class="masthead-gradient">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6">
                    <a href="index.html"><img class="logo" src="/static-assets/turquoise-logo.png" alt="turquoise trucking logo"></a>
                </div>
                <div class="col-sm-6 align-middle">
                    <div class="btn-group float-right" style="padding: 0.75em;">
                        <a class="btn btn-success" href="tel:+18447997900" role="button"><i class="fas fa-phone"></i>&nbsp;Call 844-799-7900</a>
                        <a class="btn btn-primary" href="mailto:contact@turquoisetruck.com" role="button"><i class="fas fa-envelope"></i>&nbsp;Email&nbsp;us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
