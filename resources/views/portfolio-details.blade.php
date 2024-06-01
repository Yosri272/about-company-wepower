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
    <link href="assets/css/style_detels.css" rel="stylesheet">


    <!-- Vendor CSS Files -->

    <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">



    <!--========================== Header ============================-->
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="{{ route('home') }}" class="scrollto"><span>WE</span>Power</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('home') }}">{{ __('messages.home') }}</a></li>
                    <li><a href="{{ route('home') }}">{{ __('messages.about_us') }}</a></li>
                    <li><a href="{{ route('home') }}">{{ __('messages.services') }}</a></li>
                    <li><a href="{{ route('home') }}">{{ __('messages.portfolio') }}</a></li>
                    <li><a href="{{ route('home') }}">{{ __('messages.team') }}</a></li>
                    <li class="menu-has-children"><a href="">{{ __('messages.language') }}</a>
                        <ul>
                            <li><a href="{{ url('language/en') }}"
                                    onclick="setDirection('ltr')">{{ __('messages.english') }}</a></li>
                            <li><a href="{{ url('language/ar') }}"
                                    onclick="setDirection('rtl')">{{ __('messages.arabic') }}</a></li>
                        </ul>

                    </li>
                    <li><a href="{{ route('home') }}">{{ __('messages.contact') }}</a></li>
                </ul>
            </nav>
        </div>
    </header>
  <main id="main">
        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="{{ route('home') }}">{{ __('messages.home') }}</a></li>
                        <li>{{ __('messages.portfolio_details') }}</li>
                    </ol>
                    <h2>{{ __('messages.portfolio_details') }}</h2>

                </div>

            </div>
        </section><!-- End Our Portfolio Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ __('messages.project_information') }}</h3>
                            <ul>
                                <li><strong>{{ __('messages.category') }}</strong>: {{ __('messages.web_design') }}
                                </li>
                                <li><strong>{{ __('messages.client') }} :</strong>{{ __('messages.Company') }}</li>
                                <li><strong>{{ __('messages.project_date') }} :</strong>{{ __('messages.date') }}</li>
                                <li><strong>{{ __('messages.project_url') }} :</strong><a href="#">{{ __('messages.url') }}</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>{{ __('messages.example_of_portfolio_detail') }}</h2>
                            <p>{{ __('messages.example_paragraph') }}</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->
        <br>
        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" data-aos-delay="200">
          <div class="container">

              <div class="row">
                  <div class="col-lg-6 video-box">
                      <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4"
                          data-vbtype="video" data-autoplay="true"></a>
                  </div>

                  <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                      <div class="icon-box">
                          <div class="icon"><i class="bx bx-fingerprint"></i></div>
                          <h4 class="title"><a href="">{{ __('messages.lorem_ipsum') }}</a></h4>
                          <p class="description">{{ __('messages.lorem_ipsum_description') }}</p>
                      </div>

                      <div class="icon-box">
                          <div class="icon"><i class="bx bx-gift"></i></div>
                          <h4 class="title"><a href="">{{ __('messages.nemo_enim') }}</a></h4>
                          <p class="description">{{ __('messages.nemo_enim_description') }}</p>
                      </div>

                  </div>
              </div>

          </div>
      </section>

    </main><!-- End #main -->
<br>


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
