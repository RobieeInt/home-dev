<div>
    <!-- START SECTION FEATURED PROPERTIES -->
    <section class="featured portfolio bg-white-2 rec-pro rp2">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Featured </span>Properties</h2>
                <p>These are our featured properties</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers2">
                    @forelse ($homeproperties as $home)
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="
                                            {{-- route to propertyDetail with slug --}}
                                            {{ route('propertyDetail', $home->slug) }}
                                            "
                                                class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="{{ asset('property/images/blog/b-11.jpg') }}" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="{{ route('propertyDetail', $home->slug) }}" class="btn"><i
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
                                        <h3><a href="{{ route('propertyDetail', $home->slug) }}">{{ $home->name }}</a>
                                        </h3>
                                        <p class="homes-address mb-3">
                                            <a href="{{ route('propertyDetail', $home->slug) }}">
                                                <i class="fa fa-map-marker"></i><span>{{ $home->address }}</span>
                                                {{-- get city --}}
                                                <br>
                                                <span>{{ $home->city->name }}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>{{ $home->detail->bedroom }} Bed</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>{{ $home->detail->bathroom }} Bath</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>{{ $home->detail->building_area }} /
                                                    {{ $home->detail->land_area }} </span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="{{ route('propertyDetail', $home->slug) }}">
                                                    {{-- number format --}}
                                                    IDR {{ number_format($home->detail->price) }}
                                                </a>
                                            </h3>
                                            <div class="compare">
                                                {{-- unit --}}
                                                <span class="unit">{{ $home->unit->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION FEATURED PROPERTIES -->
</div>
