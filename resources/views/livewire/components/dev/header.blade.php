<div>
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
        ================================================== -->
    <header id="header-container">
        <!-- Header -->
        <div id="header">
            <div class="container container-header">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{ route('landing') }}"><img src="{{ asset('property/images/marker.png') }}"
                                alt=""></a>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <li><a href="{{ route('landing') }}">Home</a>
                            </li>
                            {{-- <li><a href="#">Listing</a>
                                <ul>
                                    <li><a href="#">Listing Grid</a>
                                        <ul>
                                            <li><a href="properties-grid-1.html">Grid View 1</a></li>
                                            <li><a href="properties-grid-2.html">Grid View 2</a></li>
                                            <li><a href="properties-grid-3.html">Grid View 3</a></li>
                                            <li><a href="properties-grid-4.html">Grid View 4</a></li>
                                            <li><a href="properties-full-grid-1.html">Grid Fullwidth 1</a></li>
                                            <li><a href="properties-full-grid-2.html">Grid Fullwidth 2</a></li>
                                            <li><a href="properties-full-grid-3.html">Grid Fullwidth 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Listing List</a>
                                        <ul>
                                            <li><a href="properties-full-list-1.html">List View 1</a></li>
                                            <li><a href="properties-list-1.html">List View 2</a></li>
                                            <li><a href="properties-full-list-2.html">List View 3</a></li>
                                            <li><a href="properties-list-2.html">List View 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Listing Map</a>
                                        <ul>
                                            <li><a href="properties-half-map-1.html">Half Map 1</a></li>
                                            <li><a href="properties-half-map-2.html">Half Map 2</a></li>
                                            <li><a href="properties-half-map-3.html">Half Map 3</a></li>
                                            <li><a href="properties-top-map-1.html">Top Map 1</a></li>
                                            <li><a href="properties-top-map-2.html">Top Map 2</a></li>
                                            <li><a href="properties-top-map-3.html">Top Map 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Agent View</a>
                                        <ul>
                                            <li><a href="agents-listing-grid.html">Agent View 1</a></li>
                                            <li><a href="agents-listing-row.html">Agent View 2</a></li>
                                            <li><a href="agents-listing-row-2.html">Agent View 3</a></li>
                                            <li><a href="agent-details.html">Agent Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Agencies View</a>
                                        <ul>
                                            <li><a href="agencies-listing-1.html">Agencies View 1</a></li>
                                            <li><a href="agencies-listing-2.html">Agencies View 2</a></li>
                                            <li><a href="agencies-details.html">Agencies Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ route('search.prop') }}">Property</a>
                            </li>
                            {{-- <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop-with-sidebar.html">Product Sidebar</a></li>
                                            <li><a href="shop-full-page.html">Product Fullpage</a></li>
                                            <li><a href="shop-single.html">Product Single</a></li>
                                            <li><a href="shop-checkout.html">Checkout Page</a></li>
                                            <li><a href="shop-order.html">Order Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">User Panel</a>
                                        <ul>
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li><a href="user-profile.html">User Profile</a></li>
                                            <li><a href="my-listings.html">My Properties</a></li>
                                            <li><a href="favorited-listings.html">Favorited Properties</a></li>
                                            <li><a href="add-property.html">Add Property</a></li>
                                            <li><a href="payment-method.html">Payment Method</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="change-password.html">Change Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="pricing-table.html">Pricing Tables</a></li>
                                    <li><a href="404.html">Page 404</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="under-construction.html">Under Construction</a></li>
                                    <li><a href="ui-element.html">UI Elements</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="#">Grid Layout</a>
                                        <ul>
                                            <li><a href="blog-full-grid.html">Full Grid</a></li>
                                            <li><a href="blog-grid-sidebar.html">With Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">List Layout</a>
                                        <ul>
                                            <li><a href="blog-full-list.html">Full List</a></li>
                                            <li><a href="blog-list-sidebar.html">With Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ route('simulasi.kpr') }}">Simulasi Kpr</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a>
                            </li>
                            {{-- <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a
                                    href="add-property.html" class="button border btn-lg btn-block text-center">Add
                                    Listing<i class="fas fa-laptop-house ml-2"></i></a></li> --}}
                        </ul>
                    </nav>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="right-side d-none d-none d-lg-none d-xl-flex">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <a href="add-property.html" class="button border">Add Listing<i
                                class="fas fa-laptop-house ml-2"></i></a>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

                <!-- Right Side Content / End -->
                {{-- <div class="header-user-menu user-menu add">
                    <div class="header-user-name">
                        <span><img src="images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                    </div>
                    <ul>
                        <li><a href="user-profile.html"> Edit profile</a></li>
                        <li><a href="add-property.html"> Add Property</a></li>
                        <li><a href="payment-method.html"> Payments</a></li>
                        <li><a href="change-password.html"> Change Password</a></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </div> --}}
                <!-- Right Side Content / End -->

                {{-- <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                    <!-- Header Widget -->
                    <div class="header-widget sign-in">
                        <div class="show-reg-form modal-open"><a href="#">Sign In</a></div>
                    </div>
                    <!-- Header Widget / End -->
                </div> --}}
                <!-- Right Side Content / End -->

                <!-- lang-wrap-->
                <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                    <div class="lang-wrap">
                        <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i
                                class="fa fa-caret-down arrlan"></i></div>
                        <ul class="lang-tooltip lang-action no-list-style">
                            <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                            <li><a href="#" data-lantext="Fr">Francais</a></li>
                            <li><a href="#" data-lantext="Es">Espanol</a></li>
                            <li><a href="#" data-lantext="De">Deutsch</a></li>
                        </ul>
                    </div>
                </div>
                <!-- lang-wrap end-->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->
</div>
