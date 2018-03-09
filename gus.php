<?php $page = 'gus'; ?>
<?php include 'head.php'; ?>
<div class="main">
    <div class="container">
        <section class="hgroup">
            <h1>About The Owner</h1>
            <h2>Gus Kaloidis </h2>

            <ul class="breadcrumb pull-right">
                <li><a href="<?= $url ?>">Home</a></li>
                <li class="active">About the Owner</li>
            </ul>

        </section>
        <section class="article-text">
            <div class="row">
                <div class="col-sm-8 col-md-8">
                    <div class="lead"><?= $ContentDAO->getContent('gus')->getContent(); ?></div>
                    <p class="columns_2">

                        <blockquote>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:thenewwoodburyfleamarket@gmail.com">thenewwoodburyfleamarket@gmail.com
                            &nbsp;</a> <br><br>
                        <i class="fa fa-phone"> (203) 263-6217 &nbsp; </i></p>
                    <small>Contact us to reserve a spot!</small>
                    </blockquote>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="service_teaser vertical">
                        <div class="service_photo">
                            <figure style="background-image:url(images/gus.jpg)"></figure>
                        </div>
                        <div class="service_details">
                            <h2 class="section_header skincolored"><b>Gus Kaloidis</b>
                                <small>Owner</small>
                            </h2>
                            <a class="btn btn-primary" href="mailto:thenewwoodburyfleamarket@gmail.com">E-Mail &nbsp; <i
                                    class="fa fa-envelope"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'foot.php'; ?>
    <?php


    ?>
