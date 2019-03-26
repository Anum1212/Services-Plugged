<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Service Plugged | Services</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- -------------------- css includes  -------------------- -->
    @include('template.site.cssIncludes')

</head>

<body>
    <!-- ------------------------- wrapper Start ------------------------- -->
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



        <!-- ------------------------- main section Start ------------------------- -->
        <main id="main" class="tg-haslayout">

            <!-- ------------------------- blog section Start ------------------------- -->
            <div class="tg-main-section tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="tg-towcolumns" class="tg-haslayout">
                            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right">
                                <div id="tg-content" class="tg-content tg-blogdetail tg-haslayout">
                                    <article class="tg-singlepost tg-haslayout">
                                        <div class="row">
                                            <div class="col-sm-10 tg-verticalbottom"> <a class="tg-btn">by: jhon doe</a>
                                                <div id="tg-blogdetail-slider" class="tg-blogdetail-slider tg-haslayout">
                                                    <div class="swiper-container gallery-top">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"> <img src="{{ asset('images/blog/blog-detail/img-01.jpg') }}"
                                                                    alt="image description">
                                                            </div>
                                                            <div class="swiper-slide"> <img src="{{ asset('images/blog/blog-detail/img-01.jpg') }}"
                                                                    alt="image description">
                                                            </div>
                                                            <div class="swiper-slide"> <img src="{{ asset('images/blog/blog-detail/img-01.jpg') }}"
                                                                    alt="image description">
                                                            </div>
                                                            <div class="swiper-slide"> <img src="{{ asset('images/blog/blog-detail/img-01.jpg') }}"
                                                                    alt="image description">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-button-next swiper-button-white"></div>
                                                    <div class="swiper-button-prev swiper-button-white"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 tg-verticalbottom">
                                                <div id="tg-blogdetail-thumb-slider" class="tg-blogdetail-thumb-slider">
                                                    <div class="swiper-container gallery-thumbs">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <figure> <img src="{{ asset('images/blog/blog-detail/thumb-01.jpg') }}"
                                                                        alt="image description">
                                                                    <div class="tg-img-hover"> <a><i class="fa fa-plus"></i></a>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <figure> <img src="{{ asset('images/blog/blog-detail/thumb-02.jpg') }}"
                                                                        alt="image description">
                                                                    <div class="tg-img-hover"> <a><i class="fa fa-plus"></i></a>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <figure> <img src="{{ asset('images/blog/blog-detail/thumb-03.jpg') }}"
                                                                        alt="image description">
                                                                    <div class="tg-img-hover"> <a><i class="fa fa-plus"></i></a>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <figure> <img src="{{ asset('images/blog/blog-detail/thumb-04.jpg') }}"
                                                                        alt="image description">
                                                                    <div class="tg-img-hover"> <a><i class="fa fa-plus"></i></a>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="tg-heading-border">
                                                    <h3>survey first for best</h3>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt
                                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                        nostrud exercitation
                                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                                        aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                        nulla pariatur. Excepteur
                                                        sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est
                                                        laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                                        voluptatem.</p>
                                                    <blockquote> <q>“Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit, sed diam nonummy
                                                            nibh eismod tincidunt utia laoreet dolore magna sigma
                                                            takania.”</q> </blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                        diam nonummy nibh euismod
                                                        tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        Claritas est etiam processus
                                                        dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                                        est notare quam littera
                                                        gothica, quam nunc putamus parum claram, anteposuerit
                                                        litterarum.</p>
                                                </div>
                                                <div class="tg-tags-shareicons tg-haslayout">
                                                    <div class="tg-tagsbox pull-left"> <strong>TAGS:</strong>
                                                        <ul class="tg-tags">
                                                            <li> <a href="#" class="tg-tag">Enjoy</a> </li>
                                                            <li> <a href="#" class="tg-tag">lazy life</a> </li>
                                                            <li> <a href="#" class="tg-tag">fly</a> </li>
                                                            <li> <a href="#" class="tg-tag">joyful</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tg-post-shareicons pull-right"> <strong>SHARE:</strong>
                                                        <ul class="tg-socialicon">
                                                            <li> <a href="#"> <i class="fa fa-facebook-f"></i> </a>
                                                            </li>
                                                            <li> <a href="#"> <i class="fa fa-linkedin"></i> </a> </li>
                                                            <li> <a href="#"> <i class="fa fa-dribbble"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tg-about-author tg-haslayout">
                                                    <figure class="tg-author-img"> <img src="{{ asset('images/blog/blog-detail/author-img.jpg') }}"
                                                            alt="image description">
                                                    </figure>
                                                    <div class="tg-author-info">
                                                        <div class="tg-heading-border">
                                                            <h3>about Author</h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p>Ansectetur adipisicing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim quis nostrud
                                                                exercitation ullamco laboris nisi ut
                                                                aliquip exea.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tg-comments" class="tg-comments tg-haslayout">
                                                    <div class="tg-heading-border">
                                                        <h3>03 comments</h3>
                                                    </div>
                                                    <ul class="tg-comment tg-haslayout">
                                                        <li>
                                                            <div class="tg-commenter">
                                                                <figure class="tg-commenter-img"> <img src="{{ asset('images/blog/blog-detail/commenter-img1.jpg') }}"
                                                                        alt="image description"> </figure>
                                                                <div class="tg-commenter-info">
                                                                    <div class="tg-comment-head tg-haslayout">
                                                                        <div class="tg-comment-head-left pull-left">
                                                                            <time datetime="2016-03-15 12:25">June 26,
                                                                                2016</time>
                                                                            <div class="tg-heading-border">
                                                                                <h3>Sean Doe</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tg-comment-head-left pull-right">
                                                                            <a class="tg-reply">reply</a> </div>
                                                                    </div>
                                                                    <div class="tg-description">
                                                                        <p>Lorem ipsum dolor sit amet, consectetuer
                                                                            adipiscing elit, sed diam nonummy nibh
                                                                            euismod tincidunt ut laoreet dolore magna
                                                                            aliquam erat volutpat.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tg-commenter">
                                                                <figure class="tg-commenter-img"> <img src="{{ asset('images/blog/blog-detail/commenter-img2.jpg') }}"
                                                                        alt="image description"> </figure>
                                                                <div class="tg-commenter-info">
                                                                    <div class="tg-comment-head tg-haslayout">
                                                                        <div class="tg-comment-head-left pull-left">
                                                                            <time datetime="2016-03-15 12:25">June 26,
                                                                                2016</time>
                                                                            <div class="tg-heading-border">
                                                                                <h3>Sean Doe</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tg-comment-head-left pull-right">
                                                                            <a class="tg-reply">reply</a> </div>
                                                                    </div>
                                                                    <div class="tg-description">
                                                                        <p>Lorem ipsum dolor sit amet, consectetuer
                                                                            adipiscing elit, sed diam nonummy nibh
                                                                            euismod tincidunt ut laoreet dolore magna
                                                                            aliquam erat volutpat.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="tg-child-comment">
                                                                <li class="tg-commenter">
                                                                    <figure class="tg-commenter-img"> <img src="{{ asset('images/blog/blog-detail/commenter-img3.jpg') }}"
                                                                            alt="image description"> </figure>
                                                                    <div class="tg-commenter-info">
                                                                        <div class="tg-comment-head tg-haslayout">
                                                                            <div class="tg-comment-head-left pull-left">
                                                                                <time datetime="2016-03-15 12:20">June
                                                                                    26, 2016</time>
                                                                                <div class="tg-heading-border">
                                                                                    <h3>Suman Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tg-comment-head-left pull-right">
                                                                                <a class="tg-reply">reply</a> </div>
                                                                        </div>
                                                                        <div class="tg-description">
                                                                            <p>Lorem ipsum dolor sit amet, consectetuer
                                                                                adipiscing elit, sed diam nonummy
                                                                                nibh euismod tincidunt ut laoreet
                                                                                dolore magna aliquam erat volutpat.</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>


                            <!-- ------------------------- left side column Start ------------------------- -->
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left">
                                <aside id="tg-sidebar" class="tg-sidebar tg-haslayout">



                                    <!-- ------------------------- (left side) serach Widget Start ------------------------- -->
                                    <div class="tg-widget tg-search">
                                        <form class="form-search">
                                            <fieldset>
                                                <input type="search" class="form-control" placeholder="Search Here">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <!-- ------------------------- (left side) serach Widget end ------------------------- -->



                                    <!-- ------------------------- Categories Start ------------------------- -->
                                    <div class="tg-widget tg-widget-categories">
                                        <h3>Categories</h3>
                                        <ul>
                                            <li><a href="#"><em>Web Design</em><i>389</i></a></li>
                                            <li><a href="#"><em>Marketing</em><i>256</i></a></li>
                                            <li><a href="#"><em>Wordpress</em><i>56</i></a></li>
                                            <li><a href="#"><em>Graphic Design</em><i>43</i></a></li>
                                            <li><a href="#"><em>Photography</em><i>38</i></a></li>
                                            <li><a href="#"><em>eCommerce</em><i>26</i></a></li>
                                            <li><a href="#"><em>Html</em><i>3</i></a></li>
                                        </ul>
                                    </div>
                                    <!-- ------------------------- categories end ------------------------- -->



                                    <!-- ------------------------- Recent Post Start ------------------------- -->
                                    <div class="tg-widget tg-widget-recentposts">
                                        <h3>Recent Posts</h3>
                                        <ul>
                                            <li>
                                                <p><a href="#">Claritas est etiam processus dynasa qui sequitur
                                                        amitsa...</a></p>
                                                <time datetime="2015-11-04 08:00">04 November 2015</time>
                                            </li>
                                            <li>
                                                <p><a href="#">Claritas est etiam processus dynasa qui sequitur
                                                        amitsa...</a></p>
                                                <time datetime="2015-11-04 08:00">04 November 2015</time>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- ------------------------- Recent Posts end ------------------------- -->


                                    <!-- ------------------------- Accordions Widget Start ------------------------- -->
                                    <div class="tg-widget tg-widget-accordions">
                                        <h3>Accordions Widget</h3>
                                        <ul class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <li class="panel panel-default active">
                                                <div class="tg-panel-heading" role="tab" id="headingOne">
                                                    <h3 class="panel-title"> <a role="button" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">Our Solution</a>
                                                    </h3>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, conser adipiscing elit, sed diam
                                                            nonummy nibh euismod
                                                            tincidunt ut laoreet dolore magna aliquam erat volupat
                                                            amitsh sangi.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="panel panel-default">
                                                <div class="tg-panel-heading" role="tab" id="headingTwo">
                                                    <h3 class="panel-title"> <a class="collapsed" role="button"
                                                            data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">Our
                                                            Mission</a> </h3>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, conser adipiscing elit, sed diam
                                                            nonummy nibh euismod
                                                            tincidunt ut laoreet dolore magna aliquam erat volupat
                                                            amitsh sangi.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="panel panel-default">
                                                <div class="tg-panel-heading" role="tab" id="headingThree">
                                                    <h3 class="panel-title"> <a class="collapsed" role="button"
                                                            data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">Our
                                                            Technology</a> </h3>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, conser adipiscing elit, sed diam
                                                            nonummy nibh euismod
                                                            tincidunt ut laoreet dolore magna aliquam erat volupat
                                                            amitsh sangi.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="panel panel-default">
                                                <div class="tg-panel-heading" role="tab" id="headingFour">
                                                    <h3 class="panel-title"> <a class="collapsed" role="button"
                                                            data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                                            aria-expanded="false" aria-controls="collapseThree">Our
                                                            Specification</a> </h3>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, conser adipiscing elit, sed diam
                                                            nonummy nibh euismod
                                                            tincidunt ut laoreet dolore magna aliquam erat volupat
                                                            amitsh sangi.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- ------------------------- Accordions Widget End ------------------------- -->



                                    <!-- ------------------------- (left side bottom) recent post Start ------------------------- -->
                                    <div class="tg-widget tg-widget-flickr">
                                        <h3>Recent Posts</h3>
                                        <ul>
                                            <li>
                                                <figure> <img src="{{ asset('images/blog/flicker-wdget/img-01.jpg') }}"
                                                        alt="image description">
                                                    <div class="tg-img-hover"> <a href="#"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure> <img src="{{ asset('images/blog/flicker-wdget/img-02.jpg') }}"
                                                        alt="image description">
                                                    <div class="tg-img-hover"> <a href="#"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure> <img src="{{ asset('images/blog/flicker-wdget/img-03.jpg') }}"
                                                        alt="image description">
                                                    <div class="tg-img-hover"> <a href="#"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure> <img src="{{ asset('images/blog/flicker-wdget/img-04.jpg') }}"
                                                        alt="image description">
                                                    <div class="tg-img-hover"> <a href="#"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure> <img src="{{ asset('images/blog/flicker-wdget/img-05.jpg') }}"
                                                        alt="image description">
                                                    <div class="tg-img-hover"> <a href="#"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure> <img src="{{ asset('images/blog/flicker-wdget/img-06.jpg') }}"
                                                        alt="image description">
                                                    <div class="tg-img-hover"> <a href="#"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <!-- ------------------------- left side column end ------------------------- -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ------------------------- blog end ------------------------- -->

        </main>
        <!-- ------------------------- main end ------------------------- -->



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
</body>
