<?php $page = 'home'; ?>
<?php include './head.php'; ?>

<section id="slider_wrapper" class="slider_wrapper full_page_photo">
    <div id="main_flexslider" class="flexslider">
        <ul class="slides">
            <li class="item" style="background-image: url(images/sliders/market3.jpg)">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="skincolored">A busy <strong>Saturday</strong> <br></h1>
                        <p class="lead">Vendors <strong>Love</strong> our customers<br>
                            And customers Love the <strong>Antiques</strong></p>
                    </div>
                </div>
            </li>
            <li class="item" style="background-image: url(images/sliders/market1.jpg)">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Vendors <strong>Setting up</strong> their <strong>antiques in the morning</strong></h1>
                        <p class="lead skincolored">Vendors may come at 6am and customers can come any time after 7.
                            Feel free to stop by and check <strong>Us Out!</strong></p>
                        <!--BADGE <span class="round_badge"><strong><i class="fa fa-market"></i></strong><strong>V3</strong></span> -->
                    </div>
                </div>
            </li>
            <li class="item" style="background-image: url(images/sliders/market2.jpg)">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>
                          One of our favorite vendors <strong>"Good Stuff Cheap!"</strong><br>
                        </h1>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</section>
<div class="main">
    <div class="container">

        <section class="call_to_action">
            <?= $ContentDAO->getContent('frontPage_top')->getContent(); ?>
            <a class="btn btn-primary btn-lg" href="<?= $url ?>about.php">Get Directions!</a>
        </section>

        <section class="call_to_action">
            <h1><i class="fa fa-flag-checkered"></i></h1>
            <h3>
                <?= $ContentDAO->getContent('announce_title')->getContent(); ?>
            </h3>
            <h4> <?= $ContentDAO->getContent('announce_content')->getContent(); ?></h4>
        </section>

        <section class="features_teasers_wrapper">
            <div class="row">
                <div class="feature_teaser col-sm-4 col-md-4">
                    <h1><i class="fa fa-coffee fa-2"></i></h1>
                    <h3>About the Market</h3>
                    <p>
                    <address>
                        <strong>The Woodbury Flea Market</strong><br>
                        Address: 44 Sherman Hill Road (RT64)<br>
                        Woodbury CT, 06798<br>
                        <abbr title="phone"> (203) 263-6217 </abbr>
                    </address>
                    </p>
                </div>
                <div class="feature_teaser col-sm-4 col-md-4">
                    <h1><i class="fa fa-group fa-2"></i></h1>
                    <h3>Vendors</h3>
                    <p>Gus and Anne Kaloidis took over the market in 2006, and have been running it as a family business
                        ever since... <a href="<?= $url ?>about.php">
                            <small>More...</small>
                        </a></p>
                </div>
                <div class="feature_teaser col-sm-4 col-md-4">
                    <h1><i class="fa fa-user fa-2"></i></h1>
                    <h3>About the Owner</h3>
                    <p>Gus Kaloidis has been in the restaurant business for almost forty years, until he sold his last
                        restaurant (Elenni's) six years ago... (203) 263-6217, <a
                            href="mailto:thenewwoodburyfleamarket@gmail.com">thenewwoodburyfleamarket@gmail.com</a>, or
                        <a href="https://www.facebook.com/pages/Woodbury-Antiques-Flea-Market/194628543955095">like us
                            on Facebook!</a><br>
                        <a href="<?= $url ?>gus.php">
                            <small>More...</small>
                    </p>
                </div>
            </div>
        </section>

    </div>
    <?php include 'foot.php'; ?>

    <?php

    ?>
