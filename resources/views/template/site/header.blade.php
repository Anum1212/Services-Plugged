<!-- -------------------- header start -------------------- -->
<header id="header" class="tg-haslayout">
    <div class="tg-topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-4 col-xs-4">
                    <ul class="tg-socialicons">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-8 col-xs-8">
                    <ul class="tg-contact-info">
                        <li> <i class="fa fa-envelope-o"></i> <a href="info%40company.html">info@serviceplugged.com</a>
                        </li>
                        <li> <i class="fa fa-phone"></i> <em>214 9303739</em> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-navigationarea tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12"> <strong class="tg-logo"> <a href="{{ route('homePage') }}"><img src="{{ asset('icons/logo.png') }}"
                                        alt="image description" width="160px" height="70px"></a> </strong>
                    <div class="tg-rightarea">
                        <nav class="tg-addnav">
                            <ul>
                                <li> <a href="javascript:void(0);" data-toggle="modal" data-target=".tg-signInUp">
                                                <i class="fa fa-user-plus"></i> <em>Hire now</em> </a>
                                </li>
                            </ul>
                        </nav>
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false"> <span class="sr-only">Toggle
                                                navigation</span> <span class="icon-bar"></span>
                                            <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div id="tg-navigation" class="tg-navigation collapse navbar-collapse"> <span class="tg-close fa fa-close"></span>
                                <ul>
                                    <li class="{{{ (Request::is('/') ? 'active' : '') }}}"><a href="{{ route('homePage') }}">Home</a></li>
                                    <li class="{{{ (Request::is('why-us') ? 'active' : '') }}}"><a href="{{ route('why-us') }}">Why Us?</a></li>
                                    <li class="{{{ (Request::is('categories') ? 'active' : '') }}}"><a href="{{ route('categories') }}">Categories</a></li>
                                    <li class="{{{ (Request::is('services/allServices') ? 'active' : '') }}}"><a href="{{ route('services.allServices') }}">Services</a></li>
                                    <li class="{{{ (Request::is('blog') ? 'active' : '') }}}"><a href="{{ route('blog') }}">blog</a> </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- -------------------- header end -------------------- -->