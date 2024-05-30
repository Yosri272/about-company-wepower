<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <title>WEPowers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Add Google Fonts - Cairo -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;500;600;700&display=swap">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- Vendor CSS Files -->

    <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

    <!--========================== Top Bar ============================-->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="fa fa-phone"></i> <a href="tel:+9665xxxxxxxx">{{ __('messages.phone_number') }}</a>
                <span class="separator">|</span>
                <i class="fa fa-envelope"></i> <a href="mailto:contact@example.com"> contact@example.com</a>

            </div>

            <div class="social-links float-right">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </section>

    <!--========================== Header ============================-->
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="#body" class="scrollto"><span>WE</span>Power</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#body">{{ __('messages.home') }}</a></li>
                    <li><a href="#about">{{ __('messages.about_us') }}</a></li>
                    <li><a href="#services">{{ __('messages.services') }}</a></li>
                    <li><a href="#portfolio">{{ __('messages.portfolio') }}</a></li>
                    <li><a href="#team">{{ __('messages.team') }}</a></li>
                    <li class="menu-has-children"><a href="">{{ __('messages.language') }}</a>
                        <ul>
                            <li><a href="{{ url('language/en') }}"
                                    onclick="setDirection('ltr')">{{ __('messages.english') }}</a></li>
                            <li><a href="{{ url('language/ar') }}"
                                    onclick="setDirection('rtl')">{{ __('messages.arabic') }}</a></li>
                        </ul>

                    </li>
                    <li><a href="#contact">{{ __('messages.contact') }}</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--========================== Intro Section ============================-->
    <section id="intro">

        <div class="intro-content">

            <h2>{{ __('messages.Making') }}<span>{{ __('messages.your') }}</span><br>{{ __('messages.happen') }}</h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">{{ __('messages.get_started') }}</a>
                <a href="#portfolio" class="btn-projects scrollto">{{ __('messages.our_projects') }}</a>
            </div>

        </div>

        <div id="intro-carousel" class="owl-carousel">
            <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
        </div>

    </section><!-- #intro -->

    <main id="main">

        <!--========================== About Section ============================-->
        <section id="about" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="img/about-img.jpg" alt="">
                    </div>

                    <div class="col-lg-6 content">
                        <h2>{{ __('messages.about_title') }}</h2>
                        <h3>{{ __('messages.about_subtitle') }}</h3>

                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> {{ __('messages.point_1') }}</li>
                            <li><i class="ion-android-checkmark-circle"></i> {{ __('messages.point_2') }}</li>
                            <li><i class="ion-android-checkmark-circle"></i> {{ __('messages.point_3') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- #about -->

        <!--========================== Services Section ============================-->
        <section id="services">
            <div class="container">
                <div class="section-header">
                    <h2>{{ __('messages.services_title') }}</h2>
                    <p>{{ __('messages.services_description') }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="fa fa-laptop"></i></div>
                            <h4 class="title"><a href="">{{ __('messages.service_1_title') }}</a></h4>
                            <p class="description">{{ __('messages.service_1_description') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box wow fadeInRight">
                            <div class="icon"><i class="fa fa-cloud"></i></div>
                            <h4 class="title"><a href="">{{ __('messages.dolor_sitema_title') }}</a></h4>
                            <p class="description">{{ __('messages.dolor_sitema_description') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-database"></i></div>
                            <h4 class="title"><a href="">{{ __('messages.sed_ut_perspiciatis_title') }}</a>
                            </h4>
                            <p class="description">{{ __('messages.sed_ut_perspiciatis_description') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-link"></i></div>
                            <h4 class="title"><a href="">{{ __('messages.magni_dolores_title') }}</a></h4>
                            <p class="description">{{ __('messages.magni_dolores_description') }}</p>
                        </div>
                    </div>


                    <!-- Repeat the same for other service boxes -->
                </div>
            </div>
        </section>
        <!-- #services -->

        <!--========================== Clients Section ============================-->
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>{{ __('messages.clients_title') }}</h2>
                    <p>{{ __('messages.clients_description') }}</p>
                </div>

                <div class="owl-carousel clients-carousel">
                    <div class="col-md-9">
                        <img src="img/clients/client-1.png" alt="Client 1">
                    </div>
                    <div class="col-md-9">
                        <img src="img/clients/client-2.png" alt="Client 2">
                    </div>
                    <div class="col-md-9">
                        <img src="img/clients/client-3.png" alt="Client 3">
                    </div>
                    <div class="col-md-9">
                        <img src="img/clients/client-4.png" alt="Client 4">
                    </div>
                    <div class="col-md-9">
                        <img src="img/clients/client-5.png" alt="Client 5">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-6.png" alt="Client 6">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-7.png" alt="Client 7">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-8.png" alt="Client 8">
                    </div>
                </div>
            </div>
        </section>
        <!-- #clients -->

        <!--========================== Our Portfolio Section ============================-->
        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container">
                <div class="section-header">
                    <h2>{{ __('messages.portfolio_title') }}</h2>


                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">{{ __('messages.All') }}</li>
                                <li data-filter=".filter-app">{{ __('messages.App') }}</li>
                                <li data-filter=".filter-card">{{ __('messages.Card') }}</li>
                                <li data-filter=".filter-web">{{ __('messages.Web') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                    data-aos-duration="500">

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>{{ __('messages.App') }}</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio') }}"  title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>{{ __('messages.Web') }}</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio') }}"  title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>{{ __('messages.App') }}</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio') }}"  title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>{{ __('messages.Card') }}</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio') }}"  title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>{{ __('messages.Web') }}</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio') }}"  title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>{{ __('messages.App') }}</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio') }}"  title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>{{ __('messages.Card') }}</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio') }}"  title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>{{ __('messages.Card') }}</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio') }}"  title="Portfolio Details"><iclass="bx bx-link"></iclass=></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>{{ __('messages.Web') }}</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolio') }}"  title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- #portfolio -->

        <!--========================== Testimonials Section ============================-->
        <section id="testimonials" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>{{ __('messages.testimonials_title') }}</h2>
                    <p>{{ __('messages.testimonials_description') }}</p>
                </div>
                {{-- <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            {{ __('messages.testimonial_1_content') }}
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                        <h3>{{ __('messages.testimonial_1_author') }}</h3>
                        <h4>{{ __('messages.testimonial_1_position') }}</h4>
                    </div>

                    <div class="testimonial-item">
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            {{ __('messages.testimonial_2_content') }}
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                        <h3>{{ __('messages.testimonial_2_author') }}</h3>
                        <h4>{{ __('messages.testimonial_2_position') }}</h4>
                    </div>

                    <!-- Repeat the structure for other testimonials -->
                </div> --}}
            </div>
        </section>
        <!-- #testimonials -->


        <!--========================== Our Team Section ============================-->
        <section id="team" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>{{ __('messages.team_title') }}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
                            <div class="details">
                                <h4>{{ __('messages.walter_white') }}</h4>
                                <span>{{ __('messages.ceo') }}</span>
                                <div class="social">
                                    <!-- Add social media links -->
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
                            <div class="details">
                                <h4>{{ __('messages.sarah_jhinson') }}</h4>
                                <span>{{ __('messages.product_manager') }}</span>
                                <div class="social">
                                    <!-- Add social media links -->
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
                            <div class="details">
                                <h4>{{ __('messages.william_anderson') }}</h4>
                                <span>{{ __('messages.cto') }}</span>
                                <div class="social">
                                    <!-- Add social media links -->
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
                            <div class="details">
                                <h4>{{ __('messages.amanda_jepson') }}</h4>
                                <span>{{ __('messages.accountant') }}</span>
                                <div class="social">
                                    <!-- Add social media links -->
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- #team -->

        <!-- ======= Pricing Section ======= -->
        <!-- ======= Pricing Section ======= -->
        <section class="pricing section-bg" data-aos="fade-up">
            <div class="container">

                <div class="section-header">
                    <h2>{{ __('messages.pricing') }}</h2>
                    <p>{{ __('messages.pricing_description') }}</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-4 box">
                        <h3>{{ __('messages.free') }}</h3>
                        <h4>$0<span>{{ __('messages.per_month') }}</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature1') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature2') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature3') }}</li>
                            <li class="na"><i class="bx bx-x"></i> <span>{{ __('messages.feature4') }}</span>
                            </li>
                            <li class="na"><i class="bx bx-x"></i> <span>{{ __('messages.feature5') }}</span>
                            </li>
                        </ul>
                        <a href="#" class="get-started-btn">{{ __('messages.get_started') }}</a>
                    </div>

                    <div class="col-lg-4 box featured">
                        <h3>{{ __('messages.business') }}</h3>
                        <h4>$29<span>{{ __('messages.per_month') }}</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature1') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature2') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature3') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature4') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature5') }}</li>
                        </ul>
                        <a href="#" class="get-started-btn">{{ __('messages.get_started') }}</a>
                    </div>

                    <div class="col-lg-4 box">
                        <h3>{{ __('messages.developer') }}</h3>
                        <h4>$49<span>{{ __('messages.per_month') }}</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature1') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature2') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature3') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature4') }}</li>
                            <li><i class="bx bx-check"></i> {{ __('messages.feature5') }}</li>
                        </ul>
                        <a href="#" class="get-started-btn">{{ __('messages.get_started') }}</a>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->
        <!-- End Pricing Section -->
        <!-- End Pricing Section -->
        <!--========================== Contact Section ============================-->
        <section id="contact" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>{{ __('messages.contact_title') }}</h2>
                    <p>{{ __('messages.contact_description') }}</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>{{ __('messages.address_title') }}</h3>
                            <address>{{ __('messages.address_content') }}</address>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>{{ __('messages.phone_title') }}</h3>
                            <p><a href="tel:+9665xxxxxxxx">{{ __('messages.phone_number') }}</a></p>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>{{ __('messages.email_title') }}</h3>
                            <p><a href="mailto:info@example.com">{{ __('messages.email_address') }}</a></p>
                        </div>
                    </div>


                </div>
            </div>

            <div class="container mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1928011.1148243336!2d39.79419940824997!3d21.416288757564444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15cf349e0cf9e8b9%3A0x34f41f3af6a7e9fe!2sMecca%2C%20Makkah%20Province%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sbg!4v1540447494452"
                    width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="{{ __('messages.your_name') }}" data-rule="minlen:4"
                                    data-msg="{{ __('messages.enter_at_least_4_chars') }}" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="{{ __('messages.your_email') }}" data-rule="email"
                                    data-msg="{{ __('messages.enter_valid_email') }}" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="{{ __('messages.subject') }}" data-rule="minlen:4"
                                data-msg="{{ __('messages.enter_at_least_8_chars_of_subject') }}" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="{{ __('messages.write_something_for_us') }}" placeholder="{{ __('messages.message') }}"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">{{ __('messages.send_message') }}</button>
                        </div>
                    </form>

                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--========================== Footer ============================-->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>WEPowers</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
                Designed by <a href="https://wepowers.com/">WEPowers</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="lib/sticky/sticky.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <script>
        // Example JavaScript to switch between LTR and RTL
        function switchLanguage(language) {
            document.documentElement.dir = language === 'ar' ? 'rtl' : 'ltr';
        }
    </script>
    <script>
        function setDirection(direction) {
            document.documentElement.setAttribute('dir', direction);
            document.documentElement.className = direction;
        }
    </script>
    <script>
        // Function to change text direction
        function setDirection(direction) {
            var body = document.getElementById('body');
            var isRtl = (direction === 'rtl');

            // Remove existing direction classes
            body.classList.remove('ltr', 'rtl');

            // Add the new direction class
            body.classList.add(direction);

            // Destroy existing Owl Carousel instance
            $('.clients-carousel').trigger('destroy.owl.carousel');

            // Reinitialize Owl Carousel with new direction
            initializeOwlCarousel(isRtl);
        }
    </script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('.portfolio-lightbox').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>

</body>

</html>
