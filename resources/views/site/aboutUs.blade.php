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
    <!-- ------------------------- Wrapper Start ------------------------- -->
    <div id="wrapper" class="tg-haslayout">

        <!-- -------------------- header start -------------------- -->
        @include('template.site.header')

        <!-- ------------------------- home-slider Start ------------------------- -->
        <div id="home-slider" class="home-slider home-slider2 tg-haslayout">
            <div class="item">
                <figure> <img src="{{ asset('images/slider2/img-01.jpg') }}" alt="image description">
                    <figcaption>
                        <div class="tg-theme-heading">
                            <h1>We are<span>e<i class="icon-delete101"></i>pert</span>In our Work</h1>
                        </div>
                        <a class="tg-btn" href="#">read more</a>
                    </figcaption>
                </figure>
            </div>
            <div class="item">
                <figure> <img src="{{ asset('images/slider2/img-01.jpg') }}" alt="image description">
                    <figcaption>
                        <div class="tg-theme-heading">
                            <h1>We are<span>e<i class="icon-delete101"></i>pert</span>In our Work</h1>
                        </div>
                        <a class="tg-btn" href="#">read more</a>
                    </figcaption>
                </figure>
            </div>
            <div class="item">
                <figure> <img src="{{ asset('images/slider2/img-01.jpg') }}" alt="image description">
                    <figcaption>
                        <div class="tg-theme-heading">
                            <h1>We are<span>e<i class="icon-delete101"></i>pert</span>In our Work</h1>
                        </div>
                        <a class="tg-btn" href="#">read more</a>
                    </figcaption>
                </figure>
            </div>
        </div>
        <!-- ------------------------- Home slider End ------------------------- -->



        <!-- ------------------------- category Section Start ------------------------- -->
        <div class="clearfix"> </div>
        <section id="aboutCategories">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 bord_left">
                        <img src="{{ asset('icons/1-24.png') }}" alt="">
                        <p>Home</p>
                    </div>

                    <div class="col-md-2 bord_center">
                        <img src="{{ asset('icons/1-73.png') }}" alt="">
                        <p>Mechanical</p>
                    </div>
                    <div class="col-md-2 bord_center">
                        <img src="{{ asset('icons/1-95.png') }}" alt="">
                        <p>Electrical</p>
                    </div>
                    <div class="col-md-2 bord_center">
                        <img src="{{ asset('icons/1-71.png') }}" alt="">
                        <p>Events</p>
                    </div>
                    <div class="col-md-2 bord_right">
                        <img src="{{ asset('icons/1-91.png') }}" alt="">
                        <p>Beauty &amp; Fitness</p>
                    </div>
                    <!-- bottom row -->
                    <div class="col-md-2 bord_left_bottom">
                        <img src="{{ asset('icons/1-75.png') }}" alt="">
                        <p>Business</p>
                    </div>
                    <div class="col-md-2 bord_center_bottom">
                        <img src="{{ asset('icons/1-77.png') }}" alt="">
                        <p>Advertisement</p>
                    </div>
                    <div class="col-md-2 bord_center_bottom">
                        <img src="{{ asset('icons/1-52.png') }}" alt="">
                        <p>Crafts</p>
                    </div>
                    <div class="col-md-2 bord_center_bottom">
                        <img src="{{ asset('icons/1-56.png') }}" alt="">
                        <p>IT Services</p>
                    </div>
                    <div class="col-md-2 bord_right_bottom">
                        <img src="{{ asset('icons/1-31.png') }}" alt="">
                        <p>Coaching</p>
                    </div>

                </div>
                <div class="text-center">
                    <a href="{{ route('categories') }}" class="btn showMorebtn"> SHOW MORE</a>
                </div>
            </div>
        </section>
        <!-- ------------------------- category section End ------------------------- -->



        <!-- ------------------------- we know Start ------------------------- -->
        <div class="clearfix"></div>
        <section id="weKnow">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>We Know! <br>
                            what you need</h2>
                        <span>
                            <hr> </span>
                        <p>Cost saving, Quality of service. Maintainus helps you compare quotes from different
                            professionals in
                            your area. Competition help you save cost and get quality service.</p>
                    </div>
                    <div class="col-md-8">
                        <div class="wrap-img">
                            <img src="{{ asset('images/how_it_works_1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------- we know End ------------------------- -->



        <!-- ------------------------- free quota Start ------------------------- -->
        <div class="clearfix"></div>
        <section id="freeQuot">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <div class="wrap-img">
                            <img src="{{ asset('images/Reviewfreequotesimage.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2>Get <br>
                            free quotes</h2>
                        <span>
                            <hr> </span>
                        <p>After you post your project, Maintainus notify all Service Providers for your requirements
                            and soon you
                            recieve free quotes to compare and select the best.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------- free quota End ------------------------- -->



        <!-- ------------------------- home service provider Start ------------------------- -->
        <div class="clearfix"></div>
        <section id="hierServiceProvider">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Hire the right <br>
                            Service Provider</h2>
                        <span>
                            <hr> </span>
                        <p>We verify the skills and identity of each Service Provider & Professional registered on
                            Maintainus. You
                            can see their profiles, and reviews, then hire the one that’s right for you.</p>
                    </div>

                    <div class="col-md-8">
                        <div class="wrap-img">
                            <img src="{{ asset('images/Hire-the-right-pro.png') }}" alt="img">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ------------------------- hier service End ------------------------- -->



        <!-- ------------------------- blogSlider ------------------------- -->
        @include('template.site.blogSlider')

        <!-- ------------------------- trustedProfessionals ------------------------- -->
        @include('template.site.trustedProfessionals')

        <!-- ------------------------- siteStats ------------------------- -->
        @include('template.site.siteStats')

        <!-- ------------------------- footer ------------------------- -->
        @include('template.site.footer')

        <!-- ------------------------- sign In Up Light Modal ------------------------- -->
        @include('template.site.signInUpLightModal2')

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
</body>

</html>
