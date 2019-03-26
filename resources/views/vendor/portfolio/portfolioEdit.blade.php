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
<section class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover m-none" style="background-color:#43464B">
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

<div class="spacer" style="margin-top:200px">

</div>
<div class="container">

    <!-- general form elements -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Edit {{ $vendorPortfolio->title }}</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('vendor.portfolioEdit', ['id' => $vendorPortfolio->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
              <!-- Spacer -->
              <div class="spacer" style="margin-top: 50px"></div>
              <!-- Image -->
              <img class="img-responsive pad" src="{{ asset('storage/vendorPortfolioImage/'.$vendorPortfolio->portfolio_image) }}" alt="{{ $vendorPortfolio->title }}" style="width: 100%; height: 400px">
              <!-- Spacer -->
              <div class="spacer" style="margin-top: 50px"></div>
                <!-- Title -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control input-lg" name="title" placeholder="Enter Title" value="{{ $vendorPortfolio->title }}">
                </div>
                <!-- Description -->
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description" placeholder="Enter ...">{{ $vendorPortfolio->description }}</textarea>
                </div>
                <!-- Upload Image -->
                <div class="form-group">
                    <label for="uploadImage">Upload New Image</label>
                    <input type="file" name="portfolio_image">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
<!-- /.box -->
@endsection

@section('script')

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('vendorTemplate/js/theme.js') }}"></script>

<!-- Demo -->
<script src="{{ asset('vendorTemplate/js/demos/demo-resume.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('vendorTemplate/js/theme.init.js') }}"></script>
@endsection
