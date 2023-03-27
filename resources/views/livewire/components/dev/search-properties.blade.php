<div id="wraper">
    <div class="properties-right featured portfolio blog google-map-right mp-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 blog-pots pr-0 fx-google-map-right pl-55">
                    <!-- Search Form -->
                    <div class="col-12 px-0 parallax-searchs">
                        <div class="banner-search-wrap">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs_1">
                                    <div class="rld-main-search">
                                        <div class="row">
                                            <div class="rld-single-input">
                                                <input type="text" wire:model="searchInput"
                                                    placeholder="Enter Keyword..." />
                                            </div>
                                            {{-- <div class="rld-single-select ml-22">
                                                <select wire:model="byUnit" class="select single-select">
                                                    <option value="0">Property Type</option>
                                                    @foreach ($master_units as $unit)
                                                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="rld-single-select">
                                                <select class="select single-select mr-0">
                                                    <option value="0">Location</option>
                                                    @foreach ($master_cities as $city)
                                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div> --}}

                                            <div class="col-xl-2 col-lg-2 col-md-4 pl-0 ml-3">
                                                <a class="btn btn-yellow" href="#">Search Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Search Form -->
                    <div class="row mt-2">
                        @foreach ($properties as $home)
                            <div class="item col-xl-6 col-lg-12 col-md-6 col-xs-12 landscapes sale">
                                <div class="project-single ps-1" data-aos="fade-up">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href=" {{ route('propertyDetail', $home->slug) }}" class="homes-img">
                                                <div class="homes-tag button alt featured">
                                                    Featured
                                                </div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                {{-- <div class="homes-price">9,000/mo</div> --}}
                                                <img src="{{ asset('property/images/blog/b-11.jpg') }}" alt="home-1"
                                                    class="img-responsive" />
                                            </a>
                                        </div>
                                        {{-- <div class="button-effect">
                                            <a href=" {{ route('propertyDetail', $home->slug) }}" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div> --}}
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content mb-0">
                                        <!-- homes address -->
                                        <h3>
                                            <a
                                                href=" {{ route('propertyDetail', $home->slug) }}">{{ $home->name }}</a>
                                        </h3>
                                        <p class="homes-address mb-3">
                                            <a href=" {{ route('propertyDetail', $home->slug) }}">
                                                <i class="fa fa-map-marker"></i><span>{{ $home->address }}</span>
                                                <br>
                                                <span>{{ $home->city->name }}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>{{ $home->detail->bedroom }} Bed</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>{{ $home->detail->bathroom }} Bath</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>{{ $home->detail->building_area }} /
                                                    {{ $home->detail->land_area }} </span>
                                            </li>
                                        </ul>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                {{-- <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2" /> --}}
                                                IDR {{ number_format($home->detail->price) }}
                                            </a>
                                            <span class="unit">{{ $home->unit->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <aside class="col-lg-6 col-md-12 google-maps-right mt-0">
                    <div id="map-leaflet"></div>
                </aside> --}}
                <aside class="col-lg-6 col-md-12 google-maps-right mt-0">
                    <div wire:ignore id="mapProperties" style="height: 1000px; width: 100%;">
                    </div>
                </aside>
            </div>
            <nav aria-label="..." class="mt-5 pagi">
            </nav>
        </div>
    </div>
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

                const homeProp = @this.home;
                // console.log("homeProp", homeProp);
                //convert homeProp to array


                console.log(homeProp);


                homeProp.forEach((item) => {
                    //marker/pin multiple places
                    var map = new google.maps.Map(document.getElementById('mapProperties'), {
                        zoom: 12,
                        center: new google.maps.LatLng(item.detail.latitude, item.detail.longitude),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });

                    var infowindow = new google.maps.InfoWindow();

                    var marker, i;

                    for (i = 0; i < homeProp.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(homeProp[i].detail.latitude, homeProp[
                                    i].detail
                                .longitude),
                            map: map,
                            icon: {
                                url: "{{ asset('property/images/marker.png') }}",
                                scaledSize: new google.maps.Size(50, 50)
                            }
                        });

                        //set content for pin marker name, address, description
                        const contentString =
                            '<div id="content">' +
                            '<div id="siteNotice">' +
                            '</div>' +
                            '<h1 id="firstHeading" class="firstHeading">' + homeProp[i].name + '</h1>' +
                            '<div id="bodyContent">' +
                            '<p><b>' + homeProp[i].address + '</b>, ' + homeProp[i].city.name + '</p>' +
                            '<p>' + homeProp[i].description + '</p>' +
                            '<p><a href="{{ route('propertyDetail', '') }}/' + homeProp[i].slug + '">' +
                            'View Details</a> ' +
                            '</div>' +
                            '</div>';



                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent(contentString);
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }





                });


                // var marker = new google.maps.Marker({
                //     map: map,
                //     anchorPoint: new google.maps.Point(0, -29)
                // });

                // autocomplete.bindTo('bounds', map);

            }
        })
    </script>
@endsection
