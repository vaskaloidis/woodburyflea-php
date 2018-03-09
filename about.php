<?php $page = 'about'; ?>
<?php include 'head.php';  ?>
<div class="main">
    <div class="container">
        <section class="hgroup">
            <h1>About us</h1>

            <ul class="breadcrumb pull-right">
                <li><a href="<?= $url ?>">Home</a></li>
                <li class="active">About us</li>
            </ul>

        </section>
        <section class="article-text">
            <div class="row">
                <div class=".col-xs-12 .col-sm-6 .col-lg-8">
                    <div class="lead"> <?= $ContentDAO->getContent('about')->getContent(); ?></div>
                    <br>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2986.893108324172!2d-73.20062!3d41.528256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e7eebe87b31df9%3A0x75b3f1c198d36c1b!2sThe+Woodbury+Flea+Market!5e0!3m2!1sen!2sus!4v1431043945411"
                        width="600" height="450" frameborder="0" style="border:0"></iframe>
                    <h2>Reservations: (203)263-6217, or arrive Saturday / Sunday 6:30am</h2>
                    <br>
                </div>
            </div>
        </section>


    </div>
    <?php include 'foot.php'; ?>