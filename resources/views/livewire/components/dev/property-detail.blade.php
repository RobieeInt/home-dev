<div class="inner-pages sin-1 homepage-4 hd-white">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="{{ asset('property/images/single-property/s-1.jpg') }}" class="grid image-link">
                    <img src="{{ asset('property/images/single-property/s-1.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('property/images/single-property/s-2.jpg') }}" class="grid image-link">
                    <img src="{{ asset('property/images/single-property/s-2.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('property/images/single-property/s-3.jpg') }}" class="grid image-link">
                    <img src="{{ asset('property/images/single-property/s-3.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('property/images/single-property/s-4.jpg') }}" class="grid image-link">
                    <img src="{{ asset('property/images/single-property/s-4.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('property/images/single-property/s-5.jpg') }}" class="grid image-link">
                    <img src="{{ asset('property/images/single-property/s-5.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('property/images/single-property/s-6.jpg') }}" class="grid image-link">
                    <img src="{{ asset('property/images/single-property/s-6.jpg') }}" class="img-fluid" alt="#">
                </a>
            </div>
        </div>

        <div class="swiper-pagination swiper-pagination-white"></div>

        <div class="swiper-button-next swiper-button-white mr-3"></div>
        <div class="swiper-button-prev swiper-button-white ml-3"></div>
    </div>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES LISTING -->
    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="headings-2 pt-0">
                                <div class="pro-wrapper">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <h3>{{ $detailProperties->name }}
                                                {{-- <span class="mrg-l-5 category-tag">For Sale</span> --}}
                                            </h3>
                                            <div class="mt-0">
                                                <a href="#listing-location" class="listing-address">
                                                    <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>
                                                    {{ $detailProperties->address }}
                                                    <br>
                                                    {{ $detailProperties->city->name }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single detail-wrapper mr-2">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h4>
                                                    {{-- number format detail price --}}
                                                    IDR {{ number_format($detailProperties->detail->price) }}
                                                    {{-- <span class="mrg-l-5 category-tag">For Sale</span> --}}
                                                </h4>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <p>
                                                            {{ $detailProperties->detail->land_area }} Luas Tanah
                                                            {{-- <span class="mrg-l-5 category-tag">LT</span> --}}
                                                            {{ $detailProperties->detail->building_area }} Luas
                                                            Bangunan
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Star Description -->
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">{{ $detailProperties->description }}</p>
                            </div>
                            <!-- End Description -->
                        </div>
                    </div>
                    <!-- Star Property Details -->
                    <div class="single homes-content details mb-30">
                        <!-- title -->
                        <h5 class="mb-4">Property Details</h5>
                        <ul class="homes-list clearfix">
                            <li>
                                <span class="font-weight-bold mr-1">Property Type:</span>
                                <span class="det">{{ $detailProperties->detail->type }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property status:</span>
                                <span class="det">{{ $detailProperties->detail->status }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property Price:</span>
                                <span class="det">IDR {{ number_format($detailProperties->detail->price) }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Floor:</span>
                                <span class="det">{{ $detailProperties->detail->floor }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Bedrooms:</span>
                                <span class="det">{{ $detailProperties->detail->bedroom }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Bath:</span>
                                <span class="det">{{ $detailProperties->detail->bathroom }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Garages:</span>
                                <span class="det">{{ $detailProperties->detail->garage }}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Year Built:</span>
                                <span class="det">{{ $detailProperties->detail->year }}</span>
                            </li>
                        </ul>
                        <!-- title -->
                        <h5 class="mt-5">Fasilitas</h5>
                        <!-- cars List -->
                        <ul class="homes-list clearfix">
                            {{-- foreach $detailPropertoes->amenities --}}
                            @foreach ($detailProperties->amenities as $amenities)
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>{{ $amenities->name }}</span>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>Floor Plans</h5>
                        <img alt="image" src="{{ asset('property/images/bg/floor-plan-1.png') }}">
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>What's Nearby</h5>
                        <div class="property-nearby">
                            <div class="row">
                                <div class="col-lg-12">


                                    {{-- check $detailProperties->nearby if type == education --}}
                                    @if ($detailProperties->nearby->where('type', 'education')->count() > 0)
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-info">
                                                <i class="fas fa-graduation-cap mr-2"></i><b
                                                    class="title">Education</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    {{-- foreach --}}
                                                    @foreach ($detailProperties->nearby->where('type', 'education') as $nearby)
                                                        <li class="d-flex">
                                                            <h6 class="mb-3 mr-2">{{ $nearby->name }}</h6>
                                                            <span>({{ $nearby->distance }} miles)</span>
                                                            <ul class="list-unstyled list-inline ml-auto">
                                                                @for ($i = 0; $i < $nearby->rating; $i++)
                                                                    <li class="list-inline-item m-0 text-warning"><i
                                                                            class="fas fa-star fa-xs"></i></li>
                                                                @endfor
                                                                @for ($i = 0; $i < 5 - $nearby->rating; $i++)
                                                                    <li class="list-inline-item m-0 text-warning"><i
                                                                            class="far fa-star fa-xs"></i></li>
                                                                @endfor
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($detailProperties->nearby->where('type', 'health & medical')->count() > 0)
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-success">
                                                <i class="fas fa-user-md mr-2"></i><b class="title">Health &
                                                    Medical</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    {{-- foreach --}}
                                                    @foreach ($detailProperties->nearby->where('type', 'health & medical') as $nearby)
                                                        <li class="d-flex">
                                                            <h6 class="mb-3 mr-2">{{ $nearby->name }}</h6>
                                                            <span>({{ $nearby->distance }} miles)</span>
                                                            <ul class="list-unstyled list-inline ml-auto">
                                                                @for ($i = 0; $i < $nearby->rating; $i++)
                                                                    <li class="list-inline-item m-0 text-warning"><i
                                                                            class="fas fa-star fa-xs"></i></li>
                                                                @endfor
                                                                @for ($i = 0; $i < 5 - $nearby->rating; $i++)
                                                                    <li class="list-inline-item m-0 text-warning"><i
                                                                            class="far fa-star fa-xs"></i></li>
                                                                @endfor
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($detailProperties->nearby->where('type', 'transportation')->count() > 0)
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-danger">
                                                <i class="fas fa-car mr-2"></i><b class="title">Transportation</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    {{-- foreach --}}
                                                    @foreach ($detailProperties->nearby->where('type', 'transportation') as $nearby)
                                                        <li class="d-flex">
                                                            <h6 class="mb-3 mr-2">{{ $nearby->name }}</h6>
                                                            <span>({{ $nearby->distance }} miles)</span>
                                                            <ul class="list-unstyled list-inline ml-auto">
                                                                @for ($i = 0; $i < $nearby->rating; $i++)
                                                                    <li class="list-inline-item m-0 text-warning"><i
                                                                            class="fas fa-star fa-xs"></i></li>
                                                                @endfor
                                                                @for ($i = 0; $i < 5 - $nearby->rating; $i++)
                                                                    <li class="list-inline-item m-0 text-warning"><i
                                                                            class="far fa-star fa-xs"></i></li>
                                                                @endfor
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif


                                    {{-- <div class="nearby-info">
                                        <span class="nearby-title mb-3 d-block text-danger">
                                            <i class="fas fa-car mr-2"></i><b class="title">Transportation</b>
                                        </span>
                                        <div class="nearby-list">
                                            <ul class="property-list list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Airport Transportation</h6>
                                                    <span>(11.36 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star-half fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">NYC Executive Limo</h6>
                                                    <span>(11.87 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Empire Limousine</h6>
                                                    <span>(11.52 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="far fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i
                                                                class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-location map">
                        <h5>Location</h5>
                        <div class="divider-fade"></div>
                        {{-- <div id="map-contact" class="contact-map"></div> --}}
                        <div wire:ignore id="map" style="height: 300px; width: 100%;">
                        </div>
                    </div>
                    <!-- End Add Review -->
                </div>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="single widget">
                        <!-- end author-verified-badge -->
                        <div class="sidebar">
                            <div class="widget-boxed mt-33 mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Agent Information</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="sidebar-widget author-widget2">
                                        <div class="author-box clearfix">
                                            {{-- <img src="images/testimonials/ts-1.jpg" alt="author-image"
                                                class="author__img"> --}}
                                            <h4 class="author__title">{{ $detailProperties->user->name }}</h4>
                                            <p class="author__meta">Agent of Property</p>
                                        </div>
                                        <ul class="author__contact">
                                            <li><span class="la la-map-marker"><i
                                                        class="fa fa-map-marker"></i></span>{{ $detailProperties->user->address }}
                                            </li>
                                            <li><span class="la la-phone"><i class="fa fa-phone"
                                                        aria-hidden="true"></i></span><a
                                                    href="
                                                    https://api.whatsapp.com/send?phone={{ $detailProperties->user->phone }}&text=Halo%20Saya%20Mau%20Tanya%20Tentang%20Properti%20{{ $detailProperties->name }}%20Yang%20Anda%20Pasarkan">+{{ $detailProperties->user->phone }}</a>
                                                {{-- whatsapp icon --}}
                                                <a
                                                    href="https://api.whatsapp.com/send?phone={{ $detailProperties->user->phone }}&text=Halo%20Saya%20Mau%20Tanya%20Tentang%20Properti%20{{ $detailProperties->name }}%20Yang%20Anda%20Pasarkan">
                                                    <i class="fab fa-whatsapp ml-3"></i>
                                            </li>
                                            <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                        aria-hidden="true"></i></span><a
                                                    href="#">{{ $detailProperties->user->email }}</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="main-search-field-2">
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Recent Properties</h4>
                                    </div>
                                    @forelse ($properties as $property)
                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="blog-details.html"><img
                                                                src="{{ asset('property/images/feature-properties/fp-1.jpg') }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.html">
                                                            <h6>{{ $property->name }}</h6>
                                                        </a>
                                                        <p>
                                                            <i class="fa fa-map-marker"></i>
                                                            {{ $property->address }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                                <!-- Start: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Specials of the day</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="banner"><img
                                                src="{{ asset('property/images/single-property/banner.jpg') }}"
                                                alt=""></div>
                                    </div>
                                </div>
                                <!-- End: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Popular City</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            @forelse ($cities as $city)
                                                <div class="tags">
                                                    <span><a href="#"
                                                            class="btn btn-outline-primary">{{ $city->name }}</a></span>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- START SIMILAR PROPERTIES -->
            <section class="similar-property featured portfolio p-0 bg-white-inner">
                <div class="container">
                    <h5>Similar Properties</h5>
                    <div class="row portfolio-items">
                        @forelse ($properties3 as $home)
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
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
                                                <img src="{{ asset('property/images/blog/b-11.jpg') }}"
                                                    alt="home-1" class="img-responsive">
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
                                        <h3><a
                                                href="{{ route('propertyDetail', $home->slug) }}">{{ $home->name }}</a>
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

                        @empty
                        @endforelse
                    </div>
                </div>
            </section>
            <!-- END SIMILAR PROPERTIES -->
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->
</div>

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>
    <script>
        document.addEventListener('livewire:load', () => {
            google.maps.event.addDomListener(window, 'load', initialize);

            function initialize() {
                // console.log("live wire prop", @this.home);

                const homeProp = @this.home.detail;
                console.log("homeProp", homeProp);
                //convert homeProp to array

                //get lat, long from HomeProp and pin maps
                var map = new google.maps.Map(document.getElementById('map'), {
                    //get lat, long from homeProp
                    center: {
                        lat: homeProp.latitude,
                        lng: homeProp.longitude
                    },
                    zoom: 15
                });

                //pin marker lat,lang with custom pin
                var marker = new google.maps.Marker({
                    position: {
                        lat: homeProp.latitude,
                        lng: homeProp.longitude
                    },
                    map: map,
                    title: 'Hello World!',
                    icon: {
                        url: "{{ asset('property/images/marker.png') }}",
                        scaledSize: new google.maps.Size(50, 50)
                    }
                });



                // //marker jakarta on maps
                // var map = new google.maps.Map(document.getElementById('map'), {
                //     //get lat, long from homeProp
                //     center: {
                //         lat: -6.1753924,
                //         lng: 106.827153
                //     },
                //     zoom: 15
                // });

                // //pin marker jakarta
                // var marker = new google.maps.Marker({
                //     position: {
                //         lat: -6.1753924,
                //         lng: 106.827153
                //     },
                //     map: map,
                //     title: 'Hello World!'
                // });


                // var marker = new google.maps.Marker({
                //     map: map,
                //     anchorPoint: new google.maps.Point(0, -29)
                // });

                // autocomplete.bindTo('bounds', map);

            }
        })
    </script>
@endsection
