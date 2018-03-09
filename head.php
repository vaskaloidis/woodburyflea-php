<?php

require __DIR__ . '/vendor/autoload.php';

// installs global error and exception handlers

include './config.php';
$Config = new Config('config.ini');
$dir = Config::get('dir');
$url = Config::get('url');
$dbUser = Config::get('db_user');
$dbPass = Config::get('db_password');
$dbServer = Config::get('db_server');
$dbDb = Config::get('db_database');
$env = Config::get('environment');

Rollbar::init(
  array(
    'access_token' => 'bfa0e3e6e6ab455d9be3401f12794b09',
    'environment' => $env
  )
);


$user = $Config::get('user');
$password = $Config::get('password');

$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbDb);

include $dir . 'lib/ContentDAO.php';
include $dir . 'lib/Parser.php';

$ContentDAO = new ContentDAO($conn, $Config);
$Parser = new Parser();

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
  <!-- Google AdWords / Analytics - gtag.js -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115473189-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-115473189-1');
  </script>

    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,300italic"
        rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <title>The Woodbury Flea Market</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?= $url ?>favicon.ico?v=3"/>

    <link href="<?= $url ?>animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= $url ?>js/woothemes-FlexSlider-06b12f8/flexslider.css" type="text/css"
          media="screen">
    <link rel="stylesheet" href="<?= $url ?>js/prettyPhoto_3.1.5/prettyPhoto.css" type="text/css" media="screen">
    <link href="<?= $url ?>style.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="--><?//= $url ?><!--fonts/font-awesome/css/font-awesome.min.css" media="screen">-->
    <script type="text/javascript" src="<?= $url ?>js/modernizr.custom.48287.js"></script>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-fa-57x57-precomposed.png">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="<?= $url ?>manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

<!-- BEGIN PRIVY WIDGET CODE -->
<script type='text/javascript'>
    var _d_site = _d_site || 'A620F353BF55BB91D31BCF8D';
    (function () {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.src = document.location.protocol + '//widget.privy.com/assets/widget.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(script, s);
    })();
</script>
<!-- END PRIVY WIDGET CODE -->

</head>

<body>
<header>
    <div class="container">
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= $url ?>">
                    <img src="<?= $url ?>images/wfm_logo.png" alt="optional logo">
                    <!-- ><span class="logo_title">The Woodbury<strong>Antiques and Flea Market</strong></span>
                    <span class="logo_subtitle">The best market in CT!</span>  -->
                </a>
                <a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse"
                   data-target=".navbar-collapse"><span class="nb_left pull-left">
							<span class="fa fa-reorder"></span></span> <span class="nb_right pull-right">menu</span>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav pull-right navbar-nav">
                    <li <?= $page == 'home' ? ' class="active"' : '' ?>><a href="<?= $url ?>">Home</a></li>
                    <li <?= $page == 'about' ? ' class="active"' : '' ?>><a href="<?= $url ?>about.php">About The
                            Market</a></li>
                    <li <?= $page == 'gus' ? ' class="active"' : '' ?>><a href="<?= $url ?>gus.php">Gus Kaloidis</a>
                    </li>
                    <li <?= $page == 'directions' ? ' class="active"' : '' ?>><a href="<?= $url ?>directions.php">Directions</a>
                    </li>
                    <?php if (isset($_SESSION['admin'])) { ?>
                        <li <?= $page == 'admin' ? ' class="active"' : '' ?>><a href="<?= $url ?>admin.php">Admin</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div id="social_media_wrapper"><a
                href="https://www.facebook.com/pages/Woodbury-Antiques-Flea-Market/194628543955095"><i
                    class="fa fa-facebook"></i></a> <a href="https://twitter.com/woodburyflea"><i
                    class="fa fa-twitter"></i></a>
            <a href="https://www.flickr.com/photos/131772706@N04/"><i class="fa fa-flickr"></i></a></div>
        <!-- div id="sign"><a href="register.html"><i class="fa fa-user"></i><span>Register/Sign in</span></a></div> -->
    </div>
</header>
