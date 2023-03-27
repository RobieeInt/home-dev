<div>
    <!-- START SECTION POPULAR PLACES -->
    <section class="feature-categories bg-white-2">
        <div class="container">
            <div class="sec-title">
                <h2><span>Popular </span>Places</h2>
                <p>Properties In Most Popular Places.</p>
            </div>
            <div class="row">
                <!-- Single category -->
                @forelse ($cities as $city)
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in" data-aos-delay="150">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-1">
                                <a href="{{ route('search.prop') }}"><img
                                        src="{{ asset('property/images/popular-places/12.jpg') }}" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="{{ route('search.prop') }}">{{ $city->name }}</a>
                                </h4>
                                {{-- <span>203 Properties</span> --}}
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <!-- /row -->
        </div>
    </section>
    <!-- END SECTION POPULAR PLACES -->
</div>
