<section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
     "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(<?php echo base_url();?>/assets/images/backgrounds/main-slider-1-2.jpeg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="main-slider-shape-1"><img src="<?php echo base_url();?>/assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-shape-2"><img src="<?php echo base_url();?>/assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider-shape-3"><img src="<?php echo base_url();?>/assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider__content">
                                        <h2>Paper Made <br> From Plastic </h2>
                                        <p>The Best way to recycle the plastic</p>
                                        <a href="<?php echo site_url();?>/frontend/about" class="thm-btn">Know More </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(<?php echo base_url();?>/assets/images/backgrounds/main-slider-1-2.jpeg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="main-slider-shape-1"><img src="<?php echo base_url();?>/assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-shape-2"><img src="<?php echo base_url();?>/assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider-shape-3"><img src="<?php echo base_url();?>/assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider__content">
                                        <h2>Paper Made <br> From plastic</h2>
                                        <p>The Best way to recycle the plastic</p>
                                        <a href="<?php echo site_url();?>/frontend/about" class="thm-btn">Know More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(<?php echo base_url();?>/assets/images/backgrounds/main-slider-1-2.jpeg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="main-slider-shape-1"><img src="<?php echo base_url();?>/assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider-shape-2"><img src="<?php echo base_url();?>/assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider-shape-3"><img src="<?php echo base_url();?>/assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider__content">
                                        <h2>Paper Made <br> From plastic</h2>
                                        <p>The Best way to recycle the plastic</p>
                                        <a href="<?php echo site_url();?>/frontend/about" class="thm-btn">Know More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Slider End-->







        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-xl-6">
                        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="assets/images/resources/about-one-img-1.jpeg" alt="">
                            </div>
                            <div class="about-one__shape">
                                <img src="assets/images/shapes/about-one-shape.png" alt="">
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-12">
                        <!-- <div class="about-one__right"> -->
                        <!-- <div class="section-title text-left"> -->
                        <span class="section-title__tagline">Our Introduction</span>
                        <h2 class="section-title__title">Process for the Polypaper</h2>
                        <!-- </div> -->


                        <button class="animated-btn text-white" href="#" onclick="togglePopup()"><i
                                class="fa fa-play"></i></button>



                        <!-- popup -->
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn" onclick="togglePopup()"> &times; </div>

                                <!-- <div class="yvdio">
                                    <iframe src="https://www.youtube.com/embed/5xrWrKIVBgo" frameborder="0"
                                    allowfullscreen></iframe>

                                </div> -->

                                <div class="embed-responsive embed-responsive-21by9">
                                    <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5xrWrKIVBgo"></iframe> -->

                                    <iframe  class="yvdio"  src="https://www.youtube.com/embed/5xrWrKIVBgo"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>


                            </div>
                        </div>

                        <div class="about-one__points-box">
                            <b>Some Products</b>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>PE Coated Paper</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Poly Coated Paper For Sugar Sachets Exporter</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-unstyled about-one__points about-one__points-two">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Poly Coated FBB Board Paper</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Paper cups</p>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Our Mission Start-->
        <section class="our-mission">
            <div class="our-mission-bg-box">
                <div class="our-mission-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(<?php echo base_url();?>/assets/images/backgrounds/our-mission-bg.jpeg)"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="our-mission__inner">
                            <h2 class="our-mission__title">Our mission is to became the part of Solution.... Not
                                Pollution </h2>
                            <a href="<?php echo site_url();?>/frontend/about" class="thm-btn our-mission__btn">know More </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Counter One Start-->
        <br>
        <br>
        <div class="section-title text-center">
            <!-- <span class="section-title__tagline">our feedback list</span>   -->
            <h2 class="section-title__title">Some Statistics</h2>
        </div>


        <section class="counter-one">
            <div class="counter-one-wrap">
                <div class="counter-one-shape"
                    style="background-image: url(<?php echo base_url();?>/assets/images/shapes/counter-one-shape.png)"></div>
                <div class="counter-one-img"><img src="<?php echo base_url();?>/assets/images/resources/stat_img.jpg" alt=""></div>
                <div class="counter-one-shape-2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"><img
                        src="<?php echo base_url();?>/assets/images/shapes/counter-one-shape-2.png" alt=""></div>
                <div class="counter-one-shape-3"><img src="<?php echo base_url();?>/assets/images/shapes/counter-one-shape-3.png" alt=""></div>
                <div class="container">
                    <div class="counter-one__top">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <h2 class="counter-one__top-title">How many plasic Waste do we produce, Recycle and made
                                    paper each year?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="counter-one__bottom">
                        <div class="row">
                            <div class="col-xl-12">
                                <ul class="counter-one__list list-unstyled">
                                    <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                        <div class="counter-one__icon">
                                            <span class="fa fa-trash"></span>
                                        </div>
                                        <div class="counter-one__content">
                                            <h3 class="odometer" data-count="400">0</h3>
                                            <p class="counter-one__text">million tonnes of plastic waste produced</p>
                                        </div>
                                    </li>
                                    <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                                        <div class="counter-one__icon">
                                            <span class="fa fa-recycle"></span>
                                        </div>
                                        <div class="counter-one__content">
                                            <h3 class="odometer" data-count="36">0</h3>
                                            <p class="counter-one__text">million tonnes of plastic waste Recycled</p>
                                        </div>
                                    </li>
                                    <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                                        <div class="counter-one__icon">
                                            <span class="far fa-file-alt"></span>
                                        </div>
                                        <div class="counter-one__content">
                                            <h3 class="odometer" data-count="9">00</h3>
                                            <p class="counter-one__text">percent plastic used to make paper </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--News One Start-->
        <section class="news-one">
            <div class="news-one__container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">direct from the blog</span>
                    <h2 class="section-title__title">Blogs & Articles</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="news-one__carousel owl-theme owl-carousel">
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="<?php echo base_url();?>/assets/images/blog/blog1_card.jpg" alt="">
                                    <a href="<?php echo site_url();?>/frontend/blog1">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>20 oct</p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title">
                                        <a href="<?php echo site_url();?>/frontend/">Mexican Researchers Turn Old Plastic Bottles Into
                                            Waterproof Paper</a>
                                    </h3>
                                    <p class="news-one__text">Aellentesque porttitor lacus quis enim varius sed
                                        efficitur turpis gilla sed sit amet.</p>
                                    <div class="news-one__bottom">
                                        <a href="<?php echo site_url();?>/frontend/blog1" class="news-one__btn">Read More</a>
                                        <a href="<?php echo site_url();?>/frontend/blog1" class="news-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="<?php echo base_url();?>/assets/images/blog/download.jpg" alt="">
                                    <a href="<?php echo site_url();?>/frontend/blog2">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>20 oct</p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title">
                                        <a href="<?php echo site_url();?>/frontend/blog2">Get paper from plastic pulp, the Khadi way</a>
                                    </h3>
                                    <p class="news-one__text">From clogging drains and filling up landfills or causing
                                        sooty pollution when burnt, plastic is a modern-day plague. </p>
                                    <div class="news-one__bottom">
                                        <a href="<?php echo site_url();?>/frontend/blog2" class="news-one__btn">Read More</a>
                                        <a href="<?php echo site_url();?>/frontend/blog2" class="news-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="<?php echo base_url();?>/assets/images/blog/blog3_card.png" alt="">
                                    <a href="<?php echo site_url();?>/frontend/blog3">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>20 oct</p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title">
                                        <a href="<?php echo site_url();?>/frontend/blog3">Printable Paper from Plastic Waste</a>
                                    </h3>
                                    <p class="news-one__text">Paper has a myriad of uses, but poor stability of
                                        traditional cellulose paper in harsh environments, limits the range of
                                        applications.</p>
                                    <div class="news-one__bottom">
                                        <a href="<?php echo site_url();?>/frontend/blog3" class="news-one__btn">Read More</a>
                                        <a href="<?php echo site_url();?>/frontend/blog3" class="news-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="<?php echo base_url();?>/assets/images/blog/blog4_card .jpg" alt="">
                                    <a href="<?php echo site_url();?>/frontend/blog4">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>20 oct</p>
                                    </div>
                                </div>
                                <div class="news-one__content">

                                    <h3 class="news-one__title">
                                        <a href="<?php echo site_url();?>/frontend/blog4">Entrepreneurs succeed to convert plastic bottles into
                                            mineral paper</a>
                                    </h3>
                                    <p class="news-one__text">We manufacture ecological paper created with recycled
                                        plastic bottlesand stone.</p>
                                    <div class="news-one__bottom">
                                        <a href="<?php echo site_url();?>/frontend/blog4" class="news-one__btn">Read More</a>
                                        <a href="<?php echo site_url();?>/frontend/blog4" class="news-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="<?php echo base_url();?>/assets/images/blog/blog1_card.jpg" alt="">
                                    <a href="blog1.html">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>20 oct</p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title">
                                        <a href="blog1.html">Mexican Researchers Turn Old Plastic Bottles Into
                                            Waterproof Paper</a>
                                    </h3>
                                    <p class="news-one__text">Aellentesque porttitor lacus quis enim varius sed
                                        efficitur turpis gilla sed sit amet.</p>
                                    <div class="news-one__bottom">
                                        <a href="blog1.html" class="news-one__btn">Read More</a>
                                        <a href="blog1.html" class="news-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="<?php echo base_url();?>/assets/images/blog/download.jpg" alt="">
                                    <a href="<?php echo site_url();?>/frontend/blog2">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>20 oct</p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title">
                                        <a href="<?php echo site_url();?>/frontend/blog2">Get paper from plastic pulp, the Khadi way</a>
                                    </h3>
                                    <p class="news-one__text">From clogging drains and filling up landfills or causing
                                        sooty pollution when burnt, plastic is a modern-day plague.</p>
                                    <div class="news-one__bottom">
                                        <a href="<?php echo site_url();?>/frontend/blog2" class="news-one__btn">Read More</a>
                                        <a href="<?php echo site_url();?>/frontend/blog2" class="news-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="<?php echo base_url();?>/assets/images/blog/blog3_card.png" alt="">
                                    <a href="<?php echo site_url();?>/frontend/blog3">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>20 oct</p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title">
                                        <a href="<?php echo site_url();?>/frontend/blog3">Printable Paper from Plastic Waste</a>
                                    </h3>
                                    <p class="news-one__text">Paper has a myriad of uses, but poor stability of
                                        traditional cellulose paper in harsh environments, limits the range of
                                        applications.</p>
                                    <div class="news-one__bottom">
                                        <a href="<?php echo site_url();?>/frontend/blog3" class="news-one__btn">Read More</a>
                                        <a href="<?php echo site_url();?>/frontend/blog3" class="news-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="<?php echo base_url();?>/assets/images/blog/blog4_card .jpg" alt="">
                                    <a href="<?php echo site_url();?>/frontend/blog4">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>20 oct</p>
                                    </div>
                                </div>
                                <div class="news-one__content">

                                    <h3 class="news-one__title">
                                        <a href="<?php echo site_url();?>/frontend/blog4">Entrepreneurs succeed to convert plastic bottles into
                                            mineral paper</a>
                                    </h3>
                                    <p class="news-one__text">We manufacture ecological paper created with recycled
                                        plastic bottlesand stone.</p>
                                    <div class="news-one__bottom">
                                        <a href="<?php echo site_url();?>/frontend/blog4" class="news-one__btn">Read More</a>
                                        <a href="<?php echo site_url();?>/frontend/blog4" class="news-one__arrow"><span
                                                class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>