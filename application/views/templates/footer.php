<!--Site Footer Start-->
<footer class="site-footer">
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-5 col-lg-5 wow fadeInUp" data-wow-delay="100ms">
                    <div class="site-footer__top-left">
                        <div class="site-footer__top-logo-content">
                            <a href="index.html"><img src="<?php echo base_url(); ?>/assets/images/logo-light-1.png"
                                    width="146" alt=""></a>
                            <!-- <p class="site-footer__top-text">Welcome to Polypaper 
                                        </p> -->
                        </div>
                        <div class="site-footer__top-newsletter">
                            <h5 class="site-footer__top-newsletter-title">Subsrcibe for Latest Articles and
                                Resources</h5>
                            <form class="site-footer__top-newsletter-form" action="<?php echo base_url("send_mail"); ?>"
                                method="post" id="Subscribe">

                                <div class="site-footer__top-newsletter-input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                    <button type="submit" class="site-footer__top-newsletter-btn" name="Subscribe">
                                        Subscribe</button>
                                </div>
                            </form>

                           


                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="site-footer__top-right">
                        <div class="site-footer__top-widget-box">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                                    <div class="footer-widget__column footer-widget__explore clearfix">
                                        <h3 class="footer-widget__title">Explore</h3>
                                        <ul class="footer-widget__explore-list list-unstyled clearfix">
                                            <li><a href="<?php echo site_url(); ?>/frontend/about">About</a></li>
                                            <li><a href="<?php echo site_url(); ?>/frontend/contact">Contact</a></li>
                                            <li><a href="<?php echo site_url(); ?>/frontend/blogs">Blogs</a></li>
                                            <li><a href="<?php echo site_url(); ?>/frontend/products">Products</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-4 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="footer-widget__column footer-widget__contact clearfix">
                                        <h3 class="footer-widget__title">Contact</h3>
                                        <a href="mailto:Admin@noitavonne..com">Admin@noitavonne.com</a>
                                        <p class="footer-widget__contact-text">8Noitavonne Corporate 2121 s.
                                            Columbia Ave
                                            Suite 103 Tulsa <br>Oklahoma 74114
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="site-footer__top-contact-details wow fadeInUp" data-wow-delay="400ms">
                            <div class="site-footer__top-right-social">
                                <a href="https://www.gmail.com"><i class="fab fa-google"></i></a>
                                <a href="https://www.facebook.com/Polypaper-111166208147957"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="https://www.youtube.com/channel/UCxFGehcQ25CzM-2QWaBT-mw"><i
                                        class="fab fa-youtube"></i></a>
                                <a href="https://www.instagram.com/laelalexander6/"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="site-footer__top-right-phone">
                                <p class="site-footer__top-right-phone-tagline">Call Anytime</p>
                                <a href="tel:+1 8328667421"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <p class="site-footer__bottom-text">
                <?php
                // Get the current year.
                $currentYear = date('Y');

                // Display the copyright year.
                echo '&copy; ' . $currentYear . ' Copyright By';
                ?> <a href="#">Noitavonne</a>
            </p>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="155"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:Admin@noitavonne.com">Admin@noitavonne.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+1 832.866,7421">+1 8328667421</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="https://www.gmail.com"><i class="fab fa-google"></i></a>
                <a href="https://www.facebook.com/Polypaper-111166208147957"><i class="fab fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCxFGehcQ25CzM-2QWaBT-mw"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/laelalexander6/"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>


<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="<?php echo base_url(); ?>/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/odometer/odometer.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/swiper/swiper.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/wow/wow.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/isotope/isotope.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/countdown/countdown.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/vegas/vegas.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/timepicker/timePicker.js"></script>




<!-- template js -->
<script src="<?php echo base_url(); ?>/assets/js/conult.js"></script>

</body>

</html>