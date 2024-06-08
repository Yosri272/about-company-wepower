@extends('layouts.app')

@section('title', __('messages.portfolio_details'))

@section('content')
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
    </section>

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
                            <li><strong>{{ __('messages.category') }}</strong>: {{ __('messages.web_design') }}</li>
                            <li><strong>{{ __('messages.client') }}</strong>: {{ __('messages.Company') }}</li>
                            <li><strong>{{ __('messages.project_date') }}</strong>: {{ __('messages.date') }}</li>
                            <li><strong>{{ __('messages.project_url') }}</strong>: <a href="#">{{ __('messages.url') }}</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{ __('messages.example_of_portfolio_detail') }}</h2>
                        <p>{{ __('messages.example_paragraph') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><br>
<section class="why-us section-bg" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 video-box">
                <div class="video-wrapper">
                    <img src="assets/img/why-us.jpg" class="img-fluid" alt="Why Us">
                    <div class="play-btn" data-toggle="modal" data-target="#videoModal">
                        <i class="bx bx-play"></i>
                    </div>
                </div>
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

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <video id="video" width="100%" controls>
                        <source src="video/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <button type="button" class="btn btn-secondary cancel-btn" data-dismiss="modal">{{ __('messages.Cancel') }}</button>
                </div>
            </div>
        </div>
    </div>
</section>




    <br><br>
@endsection

@push('scripts')
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
  <script>
    $(document).ready(function(){
        $('#videoModal').on('show.bs.modal', function (e) {
            var videoSrc = "assets/video/video.mp4"; // Path to your local video file
            $("#video source").attr('src', videoSrc);
            $("#video")[0].load();
            $("#video")[0].play();
        });

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video")[0].pause();
            $("#video source").attr('src', '');
            $("#video")[0].load();
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#videoModal').on('shown.bs.modal', function () {
            $("#video")[0].play();
        });

        $('#videoModal').on('hide.bs.modal', function () {
            $("#video")[0].pause();
            $("#video")[0].currentTime = 0; // Reset video to start
        });
    });
</script>


@endpush
