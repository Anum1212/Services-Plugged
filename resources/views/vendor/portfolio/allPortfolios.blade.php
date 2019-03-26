@extends('layouts.dashboard.vendor')

@section('pageTitle', 'Dashboard')

@section('style')

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/theme-elements.css') }}">

<!-- Skin CSS -->
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/skins/skin-resume.css') }}">

<!-- Demo CSS -->
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/demos/demo-resume.css') }}">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/vendorDashboard.css') }}">
@endsection

@section('pageHeading', 'Portfolio')

@section('content')
<div class="body">
    <div role="main" class="main">
        <section id="about-me" class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover m-none" style="background-color:#43464B">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1 custom-sm-margin-bottom-1">
                        <img src="{{ asset('storage/vendorProfileImage/'.$vendor->profile_img) }}" class="vendorImage img-responsive custom-border custom-image-position-2 custom-box-shadow-4" alt />
                    </div>
                    <div class="vendorDetails col-md-5 col-sm-8">
                        <h1 class="vendorName text-color-primary custom-font-size-1" style="color: #8DC043 !important">{{ $vendor->name }}</h1>
                        <p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">
                            {{ $vendor->position }}</p>
                        <span class="custom-about-me-infos">
                            <span class="custom-text-color-1 text-uppercase">Greater New York area</span>
                            <span class="custom-text-color-1 text-uppercase mb-md">Information Technology &amp;
                                Services</span>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        {{-- leave this section as it is. removing this section cuts the vendor image ¯\_(ツ)_/¯ --}}
        <div class="custom-about-me-links">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-4 col-sm-4 center custom-xs-border-bottom p-none">
                        <a data-hash href="#say-hello" class="text-decoration-none">
                            <span class="custom-nav-button text-color-dark">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <section id="portfolio" class="section section-no-border background-color-secondary m-none">
            <div class="container">
                <div class="row">
                    <div class="portfolioBtn">
                        <a href="{{ route('vendor.portfolioAddPage') }}" class="btn btn-danger btn-lg" id="portfolioAddBtn">
                            <span class="portfolioAddBtn glyphicon glyphicon-plus"></span>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Portfolio</h2>
                        {{-- leave this <ul> as it is. removing this makes the portfolio images disappear ¯\_(ツ)_/¯ --}}
                        <ul class="nav nav-pills sort-source custom-nav-sort mb-xlg" data-sort-id="portfolio" data-option-key="filter" style="display:none">
                            <li data-option-value="*" class="active"><a href="#">Show All</a></li>
                            <li data-option-value=".websites"><a href="#">Websites</a></li>
                            <li data-option-value=".logos"><a href="#">Logos</a></li>
                            <li data-option-value=".brands"><a href="#">Brands</a></li>
                        </ul>
                        <div class="row">
                            <div class="sort-destination-loader sort-destination-loader-showing">
                                <ul class="image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                                    @foreach ($vendorPortfolios as $vendorPortfolio)
                                      <li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
                                        <div class="image-gallery-item vendorPortfolio">
                                            <a href="{{ route('vendor.portfolioEditPage', ['id' => $vendorPortfolio->id]) }}" class="lightbox-portfolio">
                                                <span class="thumb-info custom-thumb-info-1">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{ asset('storage/vendorPortfolioImage/'.$vendorPortfolio->portfolio_image) }}" class="img-responsive" alt="">
                                                    </span>
                                                </span>
                                            </a>
                                            <div class="portfolioBtns">
                                              <a href="{{ route('vendor.portfolioEditPage', ['id' => $vendorPortfolio->id]) }}" id="portfolioModifyBtn" class="btn btn-info btn-lg"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                              <a href="{{ route('vendor.portfolioDelete', ['id' => $vendorPortfolio->id]) }}" id="portfolioDeleteBtn" class="btn btn-danger btn-lg"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        </li>
                                      @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('vendorTemplate/vendor/isotope/jquery.isotope.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('vendorTemplate/js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('vendorTemplate/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- Demo -->
<script src="{{ asset('vendorTemplate/js/demos/demo-resume.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('vendorTemplate/js/theme.init.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('vendorTemplate/js/vendorDashboard.js') }}"></script>
@endsection
