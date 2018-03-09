
     <footer>
          <section class="twitter_feed_wrapper">
               <div class="container">
                    <div class="row wow animated fadeInUp">
                         <div class="twitter_feed_icon col-sm-1 col-md-1"><a href="#twitter"><i class="fa fa-twitter"></i></a></div>
                         <div class="col-sm-11 col-md-11">
                              <blockquote>
                                   <p>Like Us On Facebook  <a href="https://www.facebook.com/pages/Woodbury-Antiques-Flea-Market/194628543955095">https://www.facebook.com/pages/Woodbury-Antiques-Flea-Market/194628543955095</a></p>
                                   — The Woodbury Flea Market (@woodburyflea) <a href="https://twitter.com/woodburyflea/status/588594851773448192">April 16, 2015</a></blockquote>
                         </div>
                    </div>
               </div>
          </section>
          <section id="footer_teasers_wrapper">
               <div class="container">
                    <div class="row">
                         <div class="footer_teaser col-sm-4 col-md-4">
                              <h3>About us</h3>
                              <p><?= $ContentDAO->getContent('foot_about')->getContent(); ?></p>
                              <p><i class="fa fa-map-marker"></i> 25 Sherman Hill Rd</p>
                              <p><i class="fa fa-phone"></i> (203) 263-6217</p>
                              <p><i class="fa fa-envelope"></i>  thenewwoodburyfleamarket@gmail.com</p>
							                <p>
                                <a href="https://www.facebook.com/pages/Woodbury-Antiques-Flea-Market/194628543955095">
                                  <i class="fa fa-facebook"></i> Like Us on Facebook!
                                </a>
                              </p>
                         </div>
                         <div class="footer_teaser col-sm-4 col-md-4">
                              <h3>Latest News</h3>
                              <ul class="media-list">
                                  <li class="media"> <span class="media-date"><span><?= $ContentDAO->getContent('foot_date_1')->getContent(); ?></span></span>
                                        <h5 class="media-heading"><?= $ContentDAO->getContent('foot_title_1')->getContent(); ?></h5>
                                        <p><?= $ContentDAO->getContent('foot_content_1')->getContent(); ?></p>
                                   </li>
                                   <li class="media"><span><?= $ContentDAO->getContent('foot_date_2')->getContent(); ?></span>
                                        <h5 class="media-heading"><?= $ContentDAO->getContent('foot_title_2')->getContent(); ?></h5>
                                        <p><?= $ContentDAO->getContent('foot_content_2')->getContent(); ?> </p>
                                   </li>
                                    <li class="media"><span><?= $ContentDAO->getContent('foot_date_3')->getContent(); ?></span>
                                        <h5 class="media-heading"><?= $ContentDAO->getContent('foot_title_3')->getContent(); ?></h5>
                                        <p><?= $ContentDAO->getContent('foot_content_3')->getContent(); ?> </p>
                                   </li>
                              </ul>
                         </div>
                         <div class="footer_teaser col-sm-4 col-md-4" id="latest-flickr-images">
                           <h3>Copyright</h3>
                                    Copyright The Woodbury Flea Market ©2018<br>
                                    Sherman Great Meadows LLC. all rights reserved<br>
                                    <?php if(isset($_SESSION['admin'])) { ?>
                                       <?php if($_SESSION['admin'] == true) { ?>
                                           <a href="<?= $url ?>admin.php">Admin</a> -
                                           <a href="<?= $url ?>logout.php">Logout</a><br>
                                           <?php } ?>
                                    <?php } else { ?>
                                       <a href="<?= $url ?>login.php">Login</a><br>
                                    <?php } ?>
                                    <a href="http://bluehelmet.software">http://BlueHelmet.Software</a>
                         </div>
                    </div>
               </div>
          </section>
     </footer>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.0.min.js"><\/script>')</script>
<script src="<?= $url ?>twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= $url ?>js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
<script src="<?= $url ?>js/prettyPhoto_3.1.5/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="<?= $url ?>js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= $url ?>js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="<?= $url ?>js/easing.js"></script>
<script type="text/javascript" src="<?= $url ?>js/wow.min.js"></script>
<script type="text/javascript" src="<?= $url ?>js/snap.svg-min.js"></script>
<script type="text/javascript" src="<?= $url ?>js/restart_theme.js"></script>
<script type="text/javascript" src="<?= $url ?>js/collapser.js"></script>
</body>
</html>
