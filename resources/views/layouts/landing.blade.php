<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Find Your Home">
    <meta name="author" content="">
    <title>Find Your Home</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('property/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('property/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/font-awesome.min.css') }}">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{ asset('property/css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/leaflet-gesture-handling.min.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/leaflet.markercluster.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/leaflet.markercluster.default.css') }}">

    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('property/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/animate.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('property/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/aos2.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('property/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/video.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('property/css/colors/pink.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/timedropper.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/datedropper.css') }}">
    <link rel="stylesheet" href="{{ asset('property/css/swiper.min.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('property/css/default.css') }}">

    <link rel="stylesheet" href="{{ asset('property/css/search-form.css') }}" />

    @livewireStyles
</head>

<body class="homepage-9 hp-6 hd-white hmp7 mh">
    <!-- Wrapper -->
    <div id="wrapper">

        @yield('content')








        <!-- START SECTION RECENTLY PROPERTIES -->
        {{-- <section class="featured portfolio rec-pro disc">
            <div class="container-fluid">
                <div class="sec-title discover">
                    <h2><span>Discover </span>Popular Properties</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 123,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <img src="images/blog/b-12.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 123,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="350">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 123,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="450">
                            <div class="landscapes">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <img src="images/feature-properties/fp-10.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="properties-details.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 123,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid">
                            <div class="people">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="images/feature-properties/fp-11.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 123,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb last">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <img src="images/feature-properties/fp-12.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 123,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="images/blog/b-11.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 123,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <img src="images/blog/b-12.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Beds</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Baths</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 123,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- END SECTION RECENTLY PROPERTIES -->

        <!-- START SECTION BLOG -->
        {{-- <section class="blog-section bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Articles &amp; </span>Tips</h2>
                    <p>Read the latest news from our blog.</p>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="150">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-1.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html">
                                        <h3>Explore The World</h3>
                                    </a>
                                    <div class="dates">
                                        <span class="date">April 11, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                            consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="250">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-2.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html">
                                        <h3>Find Good Places</h3>
                                    </a>
                                    <div class="dates">
                                        <span class="date">May 20, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                            consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Lis Jhonson</p>
                                            <img src="images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item no-mb" data-aos="fade-up" data-aos-delay="350">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-3.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html">
                                        <h3>All Places In Town</h3>
                                    </a>
                                    <div class="dates">
                                        <span class="date">Jun 30, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                            consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Ted Willians</p>
                                            <img src="images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- END SECTION BLOG -->





        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with
                            Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with
                            Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form"
                                            id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()"
                                                value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()"
                                                value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()"
                                                value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()"
                                                value="">
                                            <button type="submit"
                                                class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{ asset('property/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('property/js/rangeSlider.js') }}"></script>
        <script src="{{ asset('property/js/tether.min.js') }}"></script>
        <script src="{{ asset('property/js/popper.min.js') }}"></script>
        <script src="{{ asset('property/js/moment.js') }}"></script>
        <script src="{{ asset('property/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('property/js/mmenu.min.js') }}"></script>
        <script src="{{ asset('property/js/mmenu.js') }}"></script>
        <script src="{{ asset('property/js/animate.js') }}"></script>
        {{-- <script src="{{ asset('property/js/aos.js') }}"></script>
        <script src="{{ asset('property/js/aos2.js') }}"></script> --}}
        <script src="{{ asset('property/js/slick.min.js') }}"></script>
        <script src="{{ asset('property/js/fitvids.js') }}"></script>
        <script src="{{ asset('property/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('property/js/typed.min.js') }}"></script>
        <script src="{{ asset('property/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('property/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('property/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('property/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('property/js/lightcase.js') }}"></script>
        <script src="{{ asset('property/js/search.js') }}"></script>
        <script src="{{ asset('property/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('property/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('property/js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('property/js/newsletter.js') }}"></script>
        <script src="{{ asset('property/js/jquery.form.js') }}"></script>
        <script src="{{ asset('property/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('property/js/searched.js') }}"></script>
        <script src="{{ asset('property/js/forms-2.js') }}"></script>
        <script src="{{ asset('property/js/leaflet.js') }}"></script>
        <script src="{{ asset('property/js/leaflet-gesture-handling.min.js') }}"></script>
        <script src="{{ asset('property/js/leaflet-providers.js') }}"></script>
        <script src="{{ asset('property/js/leaflet.markercluster.js') }}"></script>
        <script src="{{ asset('property/js/map-style2.js') }}"></script>
        <script src="{{ asset('property/js/range.js') }}"></script>
        <script src="{{ asset('property/js/color-switcher.js') }}"></script>

        <script src="{{ asset('property/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('property/js/range-slider.js') }}"></script>
        <script src="{{ asset('property/js/slick4.js') }}"></script>
        <script src="{{ asset('property/js/popup.js') }}"></script>
        <script src="{{ asset('property/js/jqueryadd-count.js') }}"></script>
        <script src="{{ asset('property/js/map-single.js') }}"></script>
        <script src="{{ asset('property/js/swiper.min.js') }}"></script>
        <script src="{{ asset('property/js/inner.js') }}"></script>
        <script src="{{ asset('property/js/light.js') }}"></script>
        <script src="{{ asset('property/js/map4.js') }}"></script>

        <!-- Slider Revolution scripts -->
        <script src="revolution/{{ asset('property/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="revolution/{{ asset('property/js/jquery.themepunch.revolution.min.js') }}"></script>

        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                slidesPerGroup: 1,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 50,
                    },
                }
            });
        </script>
        <script>
            var typed = new Typed(".typed", {
                strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800,
            });
        </script>
        <script>
            $(".slick-lancers2").slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                        breakpoint: 1292,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true,
                            arrows: false,
                        },
                    },
                    {
                        breakpoint: 993,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true,
                            arrows: false,
                        },
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                            arrows: false,
                        },
                    },
                ],
            });
        </script>
        <script>
            $(".slick-lancers").slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                        breakpoint: 1292,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true,
                            arrows: false,
                        },
                    },
                    {
                        breakpoint: 993,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true,
                            arrows: false,
                        },
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                            arrows: false,
                        },
                    },
                ],
            });
        </script>

        {{-- <script>
            $(".dropdown-filter").on("click", function() {
                $(".explore__form-checkbox-list").toggleClass("filter-block");
            });
        </script> --}}

        <script>
            $('.slick-carousel').each(function() {
                var slider = $(this);
                $(this).slick({
                    infinite: true,
                    dots: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0'
                });

                $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                    slider.slick('slickPrev');
                });
                $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                    slider.slick('slickNext');
                });
            });
        </script>

        <!-- MAIN JS -->
        <script src="{{ asset('property/js/script.js') }}"></script>

    </div>
    <!-- Wrapper / End -->

    {{-- Custom Script --}}
    @yield('js')

    @livewireScripts
</body>

</html>
