<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Service Plugged | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- -------------------- css includes  -------------------- -->
    @include('template.site.cssIncludes')

</head>


<body class="home">
    <!-- -------------------- wrapper start -------------------- -->
    <div id="wrapper" class="tg-haslayout">

        <!-- -------------------- header start -------------------- -->
        @include('template.site.header')

        <!-- -------------------- home page slider start -------------------- -->
        <div id="home-slider" class="home-slider tg-haslayout">
            <div class="item">
                <figure> <img src="{{ asset('images/banner1.jpg') }}" alt="image description">
                    <figcaption>
                        <div class="tg-theme-heading">
                            <h1>We are<span>e<i class="icon-delete101"></i>pert</span>In our Work</h1>
                        </div>
                        <a class="tg-btn" href="about-us.html">read more</a>
                    </figcaption>
                </figure>
            </div>
            <div class="item">
                <figure> <img src="{{ asset('images/banner1.jpg') }}" alt="image description">
                    <figcaption>
                        <div class="tg-theme-heading">
                            <h1>We are<span>e<i class="icon-delete101"></i>pert</span>In our Work</h1>
                        </div>
                        <a class="tg-btn" href="about-us.html">read more</a>
                    </figcaption>
                </figure>
            </div>
            <div class="item">
                <figure> <img src="{{ asset('images/banner1.jpg') }}" alt="image description">
                    <figcaption>
                        <div class="tg-theme-heading">
                            <h1>We are<span>e<i class="icon-delete101"></i>pert</span>In our Work</h1>
                        </div>
                        <a class="tg-btn" href="about-us.html">read more</a>
                    </figcaption>
                </figure>
            </div>
        </div>
        <!-- -------------------- home page slider end -------------------- -->


        <!-- -------------------- banner start -------------------- -->
        <div class="clearfix"></div>
        <section id="find-pros-banner" class="text-center">
            <div class="container">
                <div class="col-md-4 col-sm-2 col-xs-12">
                    <div class="find-pros-point"><i class="fa fa-check"> </i> Always <strong>FREE</strong>
                    </div>

                </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="find-pros-point"><i class="fa fa-check"></i> Over 5 Million Submitted Reviews
                    </div>

                </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="find-pros-point "><i class="fa fa-check"></i> Used by Over 30 Million Homeowners
                    </div>
                </div>
            </div>
        </section>
        <!-- -------------------- banner end -------------------- -->



        <!-- -------------------- categories/services start -------------------- -->
        <div class="clearfix"> </div>
        <section id="top-categories">

            <div class="container">
                <!-- ------------------------- category Slider ------------------------- -->
                @include('template.site.categorySlider')

                <!-- ------------------------- services list start ------------------------- -->
                <div class="heading">
                    <h2>Top Services</h2>
                </div>
                <div class="hr">
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <ul class="">
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-home fa-2x" style="color:#8DC63F;"></i>
                                    Additions & Remodels</a>
                            </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-television fa-2x" style="color:#8DC63F;">
                                    </i>
                                    Appliances</a>
                            </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-pencil-square-o fa-2x" style="color:#8DC63F;"></i>
                                    Architects
                                    &amp; Engineers</a> </li>
                            <li class="topCategoriesLi"><a href="#"><i class="fa fa-bath fa-2x" style="color:#8DC63F;"></i>
                                    Bathrooms</a>
                            </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-square-o fa-2x" style="color:#8DC63F;"></i>
                                    Cabinets
                                    &amp;
                                    Countertops</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-gavel fa-2x" style="color:#8DC63F;"></i>
                                    Carpentry</a>
                            </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-road fa-2x" style="color:#8DC63F;"></i>
                                    Carpet</a>
                            </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-trash fa-2x" style="color:#8DC63F;"></i>
                                    Cleaning &amp; Maid
                                    Service </a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-building-o fa-2x" style="color:#8DC63F;"></i>
                                    Concrete, Brick
                                    &amp; Stone</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-road fa-2x" style="color:#8DC63F;"></i>
                                    Decks
                                    &amp; Porches</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <ul>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-microchip fa-2x" style="color:#8DC63F;"></i>
                                    Driveways, Patios
                                    &amp; Walks</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-fire-extinguisher fa-2x" style="color:#8DC63F;"></i>
                                    Drywall
                                    &amp; Insulation</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-desktop fa-2x" style="color:#8DC63F;"></i>
                                    Electrical &amp;
                                    Computers</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-sliders fa-2x" style="color:#8DC63F;"></i>
                                    Fences</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-road fa-2x" style="color:#8DC63F;"></i>
                                    Flooring
                                    &amp; Hardwood</a>
                            </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-university fa-2x" style="color:#8DC63F;"></i>
                                    Garages, Doors,
                                    Openers</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-briefcase fa-2x" style="color:#8DC63F;"></i>
                                    Handyman Services</a>
                            </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-thermometer-full fa-2x" style="color:#8DC63F;"></i>
                                    Heating
                                    &amp; Cooling</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-cutlery fa-2x" style="color:#8DC63F;"></i>
                                    Kitchens</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-tint fa-2x" style="color:#8DC63F;"></i>
                                    Landscape</a> </li>

                        </ul>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <ul>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-circle-o fa-2x" style="color:#8DC63F;"></i>
                                    Lawncare &amp;
                                    Sprinklers</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-clone fa-2x" style="color:#8DC63F;"></i>
                                    Painting &amp;
                                    Staining</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-database fa-2x" style="color:#8DC63F;"></i>
                                    Plumbing</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-cog fa-2x" style="color:#8DC63F;"></i>
                                    Remodels</a>
                            </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-universal-access fa-2x" style="color:#8DC63F;"></i>
                                    Roofing
                                    &amp; Gutters</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-reorder fa-2x" style="color:#8DC63F;"></i>
                                    Siding </a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-snowflake-o fa-2x" style="color:#8DC63F;"></i>
                                    Swimming Pools
                                    &amp; Spas</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-window-minimize fa-2x" style="color:#8DC63F;"></i>
                                    Tile &amp;
                                    Stone</a> </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-map-o fa-2x" style="color:#8DC63F;"></i>
                                    Walls
                                    &amp; Ceilings</a>
                            </li>
                            <li class="topCategoriesLi"><a href="#"> <i class="fa fa-windows fa-2x" style="color:#8DC63F;"></i>
                                    Windows &amp; Doors</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ------------------------- services list end ------------------------- -->
                <div class="hr">
                    <hr>
                </div>

                <!-- ------------------------- view all categories button ------------------------- -->
                <div class="category-button">
                    <a href="categories.html" class="btn  categories-btn"> View All Categories <i class="fa fa-arrow-right">
                        </i></a>
                </div>
            </div>
            <!-- ------------------------- categories/services container end ------------------------- -->
        </section>
        <!-- ------------------------- categories/services end ------------------------- -->



        <!-- ------------------------- pro finder start ------------------------- -->
        <div class="clearfix"></div>
        <section id="proFinder" class="text-center" style="background-image: url('images/findBack.jpg');">
            <div class="cont">
                <h3 class="head">Find the right pro - right away</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate temporibus nihil ad
                    commodi
                    velit.
                    Architecto, nam laudantium.</p>
                <div class="category-button">
                    <a href="#" class="btn  categories-btn"> Start ProFinder <i class="fa fa-arrow-right"> </i></a>
                </div>
            </div>
        </section>
        <!-- ------------------------- pro finder end ------------------------- -->



        <div class="spacer"></div>
        <!-- ------------------------- testimonials start ------------------------- -->
        <div class="clearfix"></div>
        <section class="tg-main-section tg-paddingzero tg-positionrelative tg-haslayout testominal-section">
            <div class="tg-main-section1 tg-testominal-parallax tg-parallax-window tg-bgafter" data-appear-top-offset="600"
                data-parallax="scroll" data-image-src="{{ asset('images/bgparallax/parallax-02.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5 tg-verticalmiddle hidden-xs">
                        <figure class="tg-img-box"> <img src="{{ asset('images/Testimonials.png') }}" alt="image description">
                        </figure>
                    </div>
                    <div class="col-md-9 col-sm-7 col-sm-12 tg-verticalmiddle">
                        <div class="tg-testimonials">
                            <div class="tg-heading-border">
                                <h2>testimonials</h2>
                            </div>
                            <div class="tg-testimonials-slider tg-haslayout">
                                <div id="tg-message-slider" class="tg-message-slider tg-haslayout">
                                    <div class="item">
                                        <blockquote> <q>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua
                                                atiam enimad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi.</q>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <blockquote> <q>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua
                                                atiam enimad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi.</q>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <blockquote> <q>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua
                                                atiam enimad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi.</q>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <blockquote> <q>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua
                                                atiam enimad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi.</q>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <blockquote> <q>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua
                                                atiam enimad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi.</q>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <blockquote> <q>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua
                                                atiam enimad minim veniam, quis nostrud exercitation ullamco laboris
                                                nisi.</q>
                                        </blockquote>
                                    </div>
                                </div>
                                <div id="tg-author-slider" class="tg-author-slider tg-haslayout">
                                    <div class="item">
                                        <figure class="tg-author-img"> <img src="{{ asset('images/t1.jpg') }}" alt="image description">
                                        </figure>
                                        <div class="tg-author-detail">
                                            <div class="tg-heading-border">
                                                <h3>Lara Doe</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <figure class="tg-author-img"> <img src="{{ asset('images/t2.jpg') }}" alt="image description">
                                        </figure>
                                        <div class="tg-author-detail">
                                            <div class="tg-heading-border">
                                                <h3>Lara Doe</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <figure class="tg-author-img"> <img src="{{ asset('images/t1.jpg') }}" alt="image description">
                                        </figure>
                                        <div class="tg-author-detail">
                                            <div class="tg-heading-border">
                                                <h3>Lara Doe</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <figure class="tg-author-img"> <img src="{{ asset('images/t2.jpg') }}" alt="image description">
                                        </figure>
                                        <div class="tg-author-detail">
                                            <div class="tg-heading-border">
                                                <h3>Lara Doe</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <figure class="tg-author-img"> <img src="{{ asset('images/t3.jpg') }}" alt="image description">
                                        </figure>
                                        <div class="tg-author-detail">
                                            <div class="tg-heading-border">
                                                <h3>Lara Doe</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <figure class="tg-author-img"> <img src="{{ asset('images/t3.jpg') }}" alt="image description">
                                        </figure>
                                        <div class="tg-author-detail">
                                            <div class="tg-heading-border">
                                                <h3>Lara Doe</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------- testimonials end ------------------------- -->



        <!-- ------------------------- expand your services start ------------------------- -->
        <div class="clearfix"></div>
        <div class="spacer container expand-header expand-center tg-haslayout">
            <h3><b> Expand your service business with Services Plugged <b> </h3>
            <p>Join a community of 75,000+ professionals who have successfully grown their business with UrbanClap</p>
        </div>
        <div class="clearfix"></div>
        <div class="container-fluid" style="margin-top:20px;">

            <div class="row ">
                <div class="col-md-1 col-sm-1 hidden-xs">

                </div>
                <div class="col-md-3 col-sm-5 expand-services">
                    <div class="expand-img">
                        <img class="img-circle img-responsive" src="{{ asset('images/waqar.jpg') }}" alt="">
                    </div>

                    <h4><b>Waqar Naveed</b> </h4>
                    <p>Wordpress Developer</p>
                    <div class="hr">
                        <hr>
                    </div>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sunt in culpa qui officia
                        deserunt mollit anim
                        id est laborum.</p>
                </div>
                <div class="col-md-3 col-sm-5 expand-services">
                    <div class="expand-img">
                        <img class="img-circle img-responsive" src="{{ asset('images/waqar.jpg') }}" alt="">
                    </div>

                    <h4><b>Waqar Naveed</b> </h4>
                    <p>Wordpress Developer</p>
                    <div class="hr">
                        <hr>
                    </div>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sunt in culpa qui officia
                        deserunt mollit anim id est
                        laborum.
                    </p>
                </div>
                <div class="col-md-3 col-sm-5 expand-services">
                    <div class="expand-img">
                        <img class="img-circle img-responsive" src="{{ asset('images/waqar.jpg') }}" alt="">
                    </div>

                    <h4><b>Waqar Naveed</b> </h4>
                    <p>Wordpress Developer</p>
                    <div class="hr">
                        <hr>
                    </div>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sunt in culpa qui officia
                        deserunt mollit anim id est
                        laborum.
                    </p>
                </div>
            </div>
        </div>
        <!-- ------------------------- expand your services end ------------------------- -->



        <!-- ------------------------- join us Start ------------------------- -->
        <div class="clearfix"></div>
        <div class="container joinUs text-center">
            <h2>Are you a professional looking to grow your service business?</h2>
            <a href="#" class="btn joinUsBtn "> Join Now</a>
        </div>
        <!-- ------------------------- join us end ------------------------- -->



        <!-- ------------------------- download app start ------------------------- -->
        <div class="clearfix"></div>
        <div class="container text-center" id="downloadAppSection">
            <div class="row">
                <!-- left div -->
                <div class="col-md-5 col-xs-12 text-align-center">
                    <div id="downloadAppSectionImage">
                        <img class="img-responsive" src="{{ asset('images/iphoneVector.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-1">

                </div>
                <!-- right div -->
                <div class="col-md-5 ">
                    <div class="downloadAppSectionText">
                        <!-- heading n text -->
                        <h4><b> Download the App </b></h4>
                        <h5>Choose and book from 100+ services and track them on the go with the UrbanClap App
                        </h5>
                        <p>Send a link via SMS to install the app</p>
                        <!-- form -->
                        <div class="downloadAppInputField clearfix">
                            <input type="tel" name="appdownload" />
                            <span class="downloadAppInputFieldAddOn">+91</span>
                            <button id="downloaAppSectionAppLinkBtn">Text App Link</button>
                        </div>
                        <br>
                        <br>
                        <!-- app store link -->
                        <div class="row" id="storelink">
                            <!-- play store -->
                            <div class="playStoreImg col-xs-6">
                                <img src="{{ asset('images/googlePlay.png') }}" alt="">
                            </div>

                            <!-- ios store -->
                            <div class="iosStoreImg col-xs-6">
                                <img src="{{ asset('images/appStore.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ------------------------- download app end ------------------------- -->

        <!-- ------------------------- blogSlider ------------------------- -->
        @include('template.site.blogSlider')

        <!-- ------------------------- trustedProfessionals ------------------------- -->
        @include('template.site.trustedProfessionals')

        <!-- ------------------------- siteStats ------------------------- -->
        @include('template.site.siteStats')

        <!-- ------------------------- footer ------------------------- -->
        @include('template.site.footer')

        <!-- ------------------------- sign In Up Light Modal ------------------------- -->
        @include('template.site.signInUpLightModal')

    </div>
    <!-- ------------------------- wrapper end ------------------------- -->

    <!-- ------------------------ scripts ------------------------ -->
    <!-- template scripts (do not remove any) -->
    <script type="text/javascript" src="{{ asset('js/jquery-library.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/servicesPageSlider/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <!-- script to close nav bar -->
    <script type="text/javascript" src="{{ asset('js/navBarMobile.js') }}"></script>

    <!-- script for hire now lightbox -->
    <script type="text/javascript" src="{{ asset('js/signInUpModal.js') }}"></script>

    <!-- scripts for blog slider -->
    <script type="text/javascript" src="{{ asset('js/tweenMax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/blogSlider.js') }}"></script>

    <!-- scripts for category slider -->
    <script type="text/javascript" src="{{ asset('js/servicesPageSlider/mouseover-parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/servicesPageSlider/mThumbnailScroller.js') }}"></script>

</body>

</html>
