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

 <!-- ======= Our Services Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <ol>
                <li><a href="{{ route('home') }}">{{ __('messages.home') }}</a></li>
                <li>{{ __('messages.our_services') }}</li>
            </ol>
            <h2>{{ __('messages.our_services') }}</h2>

        </div>

    </div>
</section>
<!-- End Our Services Section -->

<br>

    <!-- ======= Service Details Section ======= -->
    <section class="features">
        <div class="container">

            <div class="section-header">
                <h2>{{ __('messages.services_title') }}</h2>

            </div>


            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4">
                    <h3>{{ __('messages.feature_1_title') }}</h3>
                    <p class="fst-italic">
                        {{ __('messages.feature_1_description') }}
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> {{ __('messages.feature_1_point_1') }}</li>
                        <li><i class="bi bi-check"></i> {{ __('messages.feature_1_point_2') }}</li>
                    </ul>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>{{ __('messages.feature_heading') }}</h3>
                    <p class="fst-italic">
                        {{ __('messages.feature_subheading') }}
                    </p>
                    <p>
                        {{ __('messages.feature_text') }}
                    </p>
                </div>
            </div>


            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/features-3.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5">
                    <h3>{{ __('messages.feature_heading_2') }}</h3>
                    <p>{{ __('messages.feature_text_2') }}</p>
                    <ul>
                        <li><i class="bi bi-check"></i> {{ __('messages.feature_list_1') }}</li>
                        <li><i class="bi bi-check"></i> {{ __('messages.feature_list_2') }}</li>
                        <li><i class="bi bi-check"></i> {{ __('messages.feature_list_3') }}</li>
                    </ul>
                </div>
            </div>


            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/features-4.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>{{ __('messages.feature_heading_3') }}</h3>
                    <p class="fst-italic">
                        {{ __('messages.feature_subheading_3') }}
                    </p>
                    <p>
                        {{ __('messages.feature_text_3') }}
                    </p>
                </div>
            </div>


        </div>
      </section><!-- End Service Details Section -->

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

  </main><!-- End #main -->



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
