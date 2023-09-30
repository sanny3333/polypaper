<section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo base_url();?>/assets/images/backgrounds/backimage1.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact us</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo site_url();?>/frontend/index">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!--Contact Page Details Start-->
        <section class="contact-page-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page-details__left">
                            <h3 class="contact-page-details__title">Get to Know About Company</h3>
                            <div class="contact-page-details__content">
                                <div class="contact-page-details__content-img">
                                    <img src="<?php echo base_url();?>/assets/images/resources/leal sir.jpg" alt="">
                                </div>
                                <div class="contact-page-details__content-text-box"><p> Lael Alexander </p>
                                    <p class="contact-page-details__content-text-1">Founder and CEO of Noitavonne Inc</p>
                                    <p class="contact-page-details__content-text-2">"We are no longer just the pace car of the wireless technology industry,
                                        this year... We chose to enter the entire race... BEEP! BEEP!"</p>
                                    <h2 class="contact-page-details__sign"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page-details__right">
                            <ul class="list-unstyled contact-page-details__list">
                                <li>
                                    <span>Call Anytime</span>
                                    <p><a href="tel: +1 832.886.7422">+  1 832.886.7422</a></p>
                                </li>
                                <li>
                                    <span>Send Email</span>
                                    <p><a href="mailto:Admin@noitavonne.com">Admin@noitavonne.com</a></p>
                                </li>
                                <li>
                                    <span>Visit Office</span>
                                    <p>Noitavonne Corporate  2121 s. Columbia Ave  Suite 103   Tulsa <br> Oklahoma 74114</p>
                                </li>
                            </ul>
                            <div class="contact-page-details__social">
                                <a href="https://www.gmail.com"><i class="fab fa-google"></i></a>
                                        <a href="https://www.facebook.com/Polypaper-111166208147957"><i class="fab fa-facebook"></i></a>
                                        <a href="https://www.youtube.com/channel/UCxFGehcQ25CzM-2QWaBT-mw"><i class="fab fa-youtube"></i></a>
                                        <a href="https://www.instagram.com/laelalexander6/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page Details End-->

        <!--contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Contact with us</span>
                    <h2 class="section-title__title">Drop us a Message</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <?php
                        $success=$this->session->userdata('success');
                        if($success!= ""){
                            ?>
                            <div class="alert alert-success"><?php echo $success;?> </div>

                        <?php
                        }
                        ?>
                        <div class="contact-page__form">
                            <form method='post' action="<?php echo base_url().'index.php/Frontend/contact';?>"  >
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your Name" name="name">
                                           
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email Address" name="email">

                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone Number" name="phone_no">
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write a Message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">send a message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>