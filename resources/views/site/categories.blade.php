<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Service Plugged | Categories</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- -------------------- css includes  -------------------- -->
    @include('template.site.cssIncludes')

</head>

<body>

    <!-- ------------------------- wrapper start ------------------------- -->
    <div id="wrapper" class="tg-haslayout">

        <!-- -------------------- header start -------------------- -->
        @include('template.site.header')

        <!-- ------------------------- search bar start ------------------------- -->
        <section id="topSearchSection">
            <div class="container">
                <div class="para">
                    <p>Which <strong>Categories</strong> are you looking for?</p>
                </div>
                <div class="input-group">
                    <input id="search" type="text" class="form-control" name="search" placeholder="Search Categories">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                </div>
            </div>
        </section>
        <!-- ------------------------- search bar end ------------------------- -->



        <!-- ------------------------- all categories start ------------------------- -->
        <div class="container-fluid">
            <h4 class="text-center">Browse all categories</h4>
        </div>
        <section id="slide" class="container">
            <div id="tg-services-slider" class="tg-services2">


                <!-- ------------------------- home category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.home') }}">

                        <figure>
                            <div class="tg-expertise"> <i class="icon-drop41"></i>
                                <div class="tg-heading-border">
                                    <h3>Home</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Home.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>


                <!-- ------------------------- mechanical category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.mechanical') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-sawing2"></i>
                                <div class="tg-heading-border">
                                    <h3>Mechanical</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Mechinical.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills3" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>


                <!-- ------------------------- electrical category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.electrical') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-farm33"></i>
                                <div class="tg-heading-border">
                                    <h3>Electrical</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Electrical.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills4" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>


                <!-- ------------------------- events category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.events') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-painter32"></i>
                                <div class="tg-heading-border">
                                    <h3>Events</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Event.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills5" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>


                <!-- ------------------------- beauty And Fitness category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.beautyAndFitness') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-drop41"></i>
                                <div class="tg-heading-border">
                                    <h3>Beauty & Fitness</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Beauty&Fitness.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills6" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>


                <!-- ------------------------- business category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.business') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-sawing2"></i>
                                <div class="tg-heading-border">
                                    <h3>Business</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Business.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills7" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <!-- ------------------------- advertisement category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.advertisement') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-farm33"></i>
                                <div class="tg-heading-border">
                                    <h3>Advertisement</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Adz.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills8" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <!-- ------------------------- crafts category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.crafts') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-painter32"></i>
                                <div class="tg-heading-border">
                                    <h3>Crifts</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Craft.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills9" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <!-- ------------------------- IT services category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.itServices') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-painter32"></i>
                                <div class="tg-heading-border">
                                    <h3>IT Services</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/ITServices.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills9" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <!-- ------------------------- coaching category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.coaching') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-painter32"></i>
                                <div class="tg-heading-border">
                                    <h3>Coaching</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Coaching.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills9" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <!-- ------------------------- vehicle category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.vehicleMaintenance') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-painter32"></i>
                                <div class="tg-heading-border">
                                    <h3>Vehicle Maintenance</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/VehicleMaintenance.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills9" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <!-- ------------------------- laptop And Mobile category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.laptopAndMobile') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-painter32"></i>
                                <div class="tg-heading-border">
                                    <h3>Laptop & Mobile</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Laptop&Mobile.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills9" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <!-- ------------------------- travel category ------------------------- -->
                <div class="item">
                    <a href="{{ route('services.travel') }}">
                        <figure>
                            <div class="tg-expertise"> <i class="icon-painter32"></i>
                                <div class="tg-heading-border">
                                    <h3>Travel</h3>
                                </div>
                            </div>
                            <img src="{{ asset('icons/Services/Travel.png') }}" alt="image description">
                            <figcaption class="tg-img-hover">
                                <div class="tg-box">
                                    <div class="tg-description">
                                        <p>Tempor incididunt ut labore et dolore magna aliqua enim adi minim veniam,
                                            quis nostrud
                                            exercitation antiam,.</p>
                                    </div>
                                    <div id="tg-services-skills9" class="tg-skills tg-services-skills">
                                        <div class="tg-skill active"> <span class="tg-skill-name">Expertise level</span>
                                            <div class="tg-skill-holder" data-percent="88%">
                                                <div class="tg-skill-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>

            </div>
        </section>
        <!-- ------------------------- all categories end ------------------------- -->

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
