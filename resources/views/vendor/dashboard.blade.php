@extends('layouts.dashboard.vendor')
@section('pageTitle', 'Dashboard')
@section('style')
<link rel="stylesheet" href="{{ asset('vendorTemplate/vendor/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendorTemplate/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendorTemplate/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendorTemplate/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendorTemplate/vendor/magnific-popup/magnific-popup.min.css') }}">

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/theme.css') }}">
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/theme-elements.css') }}">
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/theme-blog.css') }}">
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/theme-shop.css') }}">

<!-- Current Page CSS -->
<link rel="stylesheet" href="{{ asset('vendorTemplate/vendor/rs-plugin/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('vendorTemplate/vendor/rs-plugin/css/layers.css') }}">
<link rel="stylesheet" href="{{ asset('vendorTemplate/vendor/rs-plugin/css/navigation.css') }}">

<!-- Skin CSS -->
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/skins/skin-resume.css') }}">

<!-- Demo CSS -->
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/demos/demo-resume.css') }}">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('vendorTemplate/css/vendorDashboard.css') }}">

<!-- Head Libs -->
<script src="{{ asset('vendorTemplate/vendor/modernizr/modernizr.min.js') }}"></script>
@endsection

@section('pageHeading', 'Dashboard')
@section('content')
<div class="body">
    <header id="header" class="header-floating " data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '60px', 'stickyChangeLogo': false}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-nav pt-xs">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="header-nav-main collapse">
                                    <nav class="wrapper-spy">
                                        <ul class="nav" id="mainNav">
                                            <li>
                                                <a data-hash href="#about-me" class="text-color-dark background-color-primary">
                                                    <i class="icon-home icons"></i>
                                                    <span class="custom-tooltip">About Me</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-hash href="#experience" class="text-color-dark background-color-primary">
                                                    <i class="icon-eye icons"></i>
                                                    <span class="custom-tooltip">Experience</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-hash href="#education" class="text-color-dark background-color-primary">
                                                    <i class="icon-briefcase icons"></i>
                                                    <span class="custom-tooltip">Education</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-hash href="#skills" class="text-color-dark background-color-primary">
                                                    <i class="icon-graduation icons"></i>
                                                    <span class="custom-tooltip">Skills</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-hash href="#portfolio" class="text-color-dark background-color-primary">
                                                    <i class="icon-diamond icons"></i>
                                                    <span class="custom-tooltip">Portfolio</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-hash href="#recommendations" class="text-color-dark background-color-primary">
                                                    <i class="icon-pencil icons"></i>
                                                    <span class="custom-tooltip">Recommendations</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-hash href="#blog" class="text-color-dark background-color-primary">
                                                    <i class="icon-bubbles icons"></i>
                                                    <span class="custom-tooltip">Blog</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-hash href="#say-hello" class="text-color-dark background-color-primary">
                                                    <i class="icon-envelope-open icons"></i>
                                                    <span class="custom-tooltip">Say Hello</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">
        <form action="{{ route('vendor.saveAboutMeDetails', ['id'=>$vendor->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <section id="about-me" class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover m-none"
                style="background-color:#43464B">
                <div class="container">
                    <div class="row">
                        <div class="aboutMeBtn">
                            <button type="button" class="btn btn-danger btn-lg" id="aboutMeEditBtn">
                                <span class="aboutMeEditBtn glyphicon glyphicon-pencil"></span>
                                <span class="aboutMeEditCancelBtn glyphicon glyphicon-remove"></span>
                            </button>
                            <button type="submit" class="aboutMeEditField btn btn-success btn-lg" id="aboutMeSaveBtn">
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1 custom-sm-margin-bottom-1">
                            <img src="{{ asset( 'storage/vendorProfileImage/'.$vendor->profile_img) }}" class="vendorImage img-responsive custom-border custom-image-position-2 custom-box-shadow-4"
                                alt />
                            <div class="btn btn-file aboutMeEditField">
                                <span class="glyphicon glyphicon-pencil"></span> <input type="file" name="profile_img">
                            </div>
                        </div>
                        <div class="vendorDetails col-md-5 col-sm-8">
                            <h1 class="vendorName text-color-primary custom-font-size-1" style="color: #8DC043 !important">{{ $vendor->name }}</h1>
                            <p class="aboutMeDetailHide text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">
                                {{ $vendor->position }}</p>
                            <div class="form-group aboutMeEditField">
                                <input type="text" class="form-control" name="position" value="{{ $vendor->position }}" placeholder="Enter your position">
                            </div>
                            <span class="custom-about-me-infos">
                                <span class="custom-text-color-1 text-uppercase">Greater New York area</span>
                            <span class="custom-text-color-1 text-uppercase mb-md">Information Technology &amp;
                                    Services</span>
                            <span class="custom-text-color-1 text-uppercase">
                                    <strong class="text-color-light">Previous: </strong>
                                    Front-End Developer at Porto
                                    <a data-hash href="#experience" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-xs ml-sm">View
                                        More</a>
                                </span>
                            <span class="custom-text-color-1 text-uppercase">
                                    <strong class="text-color-light">Education: </strong>
                                    Porto School
                                    <a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-xs ml-sm">View
                                        More</a>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <div class="custom-about-me-links">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-4 col-sm-4 center custom-xs-border-bottom p-none">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button text-color-dark">
                                    <i class="icon-earphones-alt icons text-color-primary"></i>
                                    Contact Information
                                </span>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 center custom-xs-border-bottom p-none">
                            <a data-hash href="#say-hello" class="text-decoration-none">
                                <span class="custom-nav-button custom-divisors text-color-dark">
                                    <i class="icon-envelope-open icons text-color-primary"></i>
                                    Send Message
                                </span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 center p-none">
                            <a href="#" class="text-decoration-none">
                                <span class="custom-nav-button text-color-dark">
                                    <i class="icon-cloud-download icons text-color-primary"></i>
                                    Download Resume
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section section-no-border background-color-light m-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="custom-box-details background-color-light custom-box-shadow-1 col-md-6 ml-xlg mb-xlg pull-right clearfix">
                                <h4>Personal Details</h4>
                                <div class="col-md-6 col-sm-6 p-none">
                                    <ul class="custom-list-style-1 p-none">
                                        <li>
                                            <span class="text-color-dark">Birthday:</span>
                                            <div class="form-group aboutMeEditField">
                                                <input type="date" class="form-control" name="birthday" id="deliveryDate">
                                            </div>
                                            <span class="custom-text-color-2 aboutMeDetailHide">{{ $vendor->birthday }}</span>
                                        </li>
                                        <li>
                                            <span class="text-color-dark">Marital:</span>
                                            <div class="form-group aboutMeEditField">
                                                <select id="languageLevel" name="marital" class="form-control">
                                                  <option value="0" <?php if($vendor->marital == 0) echo 'selected="selected"'; ?>>Single</option>
                                                  <option value="1" <?php if($vendor->marital == 1) echo 'selected="selected"'; ?>>Married</option>
                                              </select>
                                            </div>
                                            <span class="custom-text-color-2 aboutMeDetailHide">
                                                @if($vendor->marital == 0)Single @endif
                                                @if($vendor->marital == 1)Married @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="text-color-dark">Nationality:</span>
                                            <div class="form-group aboutMeEditField">
                                                <input type="text" class="form-control" name="nationality" value="{{ $vendor->nationality }}">
                                            </div>
                                            <span class="custom-text-color-2 aboutMeDetailHide">{{ $vendor->nationality }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6 p-none">
                                    <ul class="custom-list-style-1 p-none">
                                        <li>
                                            <span class="text-color-dark">Skype:</span>
                                            <div class="form-group aboutMeEditField">
                                                <input type="text" class="form-control" name="skype_id" value="{{ $vendor->skype_id }}">
                                            </div>
                                            <span class="custom-text-color-2 aboutMeDetailHide"><a class="custom-text-color-2" href="{{ $vendor->skype_id }}">{{ $vendor->skype_id }}</a></span>
                                        </li>
                                        <li>
                                            <span class="text-color-dark">PHONE:</span>
                                            <div class="form-group aboutMeEditField">
                                                <input type="number" class="form-control" name="contact_number" value="{{ $vendor->contact_number }}">
                                            </div>
                                            <span class="custom-text-color-2 aboutMeDetailHide"><a class="custom-text-color-2">{{
                                                    $vendor->contact_number }}</a></span>
                                        </li>
                                        <li>
                                            <span class="text-color-dark">EMAIL:</span>
                                            <span class="custom-text-color-2"><a class="custom-text-color-2" href="mailto:{{ $vendor->email }}">{{ $vendor->email }}</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">About Me</h2>
                            <div class="form-group aboutMeEditField">
                                <textarea class="form-control" rows="5" name="bio" style="width:45%">{{ $vendor->bio }}</textarea>
                            </div>
                            <div class="aboutMeDetailHide">
                                <p class="custom-text-color-2" id="aboutMeLess">{{ str_limit($vendor->bio, 50) }}</p>

                                <div class="about-me-more" id="aboutMeMore">
                                    {{ $vendor->bio }}
                                </div>
                                <a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-xs">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
        <section id="experience" class="section section-secondary section-no-border m-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Experience</h2>
                        <section class="timeline custom-timeline" id="timeline">
                            <div class="timeline-body">
                                <article class="timeline-box right custom-box-shadow-2">
                                    <div class="experience-info col-md-3 col-sm-5 match-height background-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">Sep 2012</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater
                                                New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-md-9 col-sm-7 match-height background-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">Chief Product Officer</h4>
                                        <p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor,
                                            a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales.
                                            Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim
                                            arcu.
                                        </p>
                                    </div>
                                </article>
                                <article class="timeline-box right custom-box-shadow-2">
                                    <div class="experience-info col-md-3 col-sm-5 match-height background-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">Sep 2012</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater
                                                New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-md-9 col-sm-7 match-height background-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">Chief Product Officer</h4>
                                        <p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor,
                                            a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales.
                                            Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim
                                            arcu.
                                        </p>
                                    </div>
                                </article>
                                <article class="timeline-box right custom-box-shadow-2">
                                    <div class="experience-info col-md-3 col-sm-5 match-height background-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">Sep 2012</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater
                                                New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-md-9 col-sm-7 match-height background-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">Chief Product Officer</h4>
                                        <p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor,
                                            a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales.
                                            Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim
                                            arcu.
                                        </p>
                                    </div>
                                </article>
                                <div class="timeline-bar"></div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <form action="{{ route('vendor.saveEducationDetails', ['id'=>$vendor->id]) }}" method="post">
            @csrf
            <section id="education" class="section section-no-border custom-background-color-1 m-none">
                <div class="container">
                    <div class="row">
                        <div id="educationBtn">
                            <button type="button" class="btn btn-danger btn-lg" id="educationEditBtn">
                                <span class="educationEditBtn glyphicon glyphicon-pencil"></span>
                                <span class="educationEditCancelBtn glyphicon glyphicon-remove"></span>
                            </button>
                            <button type="submit" class="educationEditField btn btn-success btn-lg" id="educationSaveBtn">
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-none">Education</h2>
                            <div class="educationEditField custom-box-details-2 background-color-light custom-box-shadow-3">
                                <br> {{-- already saved education details --}} @foreach ($vendorEducations as $vendorEducation)
                                <div class="form-group">
                                    <label for="">Institute: </label>
                                    <input type="text" id="institute" name="instituteSaved[]" placeholder="Institute Name" value="{{ $vendorEducation->institute }}"
                                        required />
                                    <label for="">Degree/Diploma: </label>
                                    <input type="text" id="degree_diploma" name="degree_diplomaSaved[]" placeholder="Degree/Diploma" value="{{ $vendorEducation->degree_diploma }}"
                                        required />
                                    <label for="">Year Start: </label>
                                    <input type="number" id="yearStart" name="yearStartSaved[]" placeholder="Year Start" value="{{ $vendorEducation->year_start }}"
                                        required />
                                    <label for="">Year End: </label>
                                    <input type="number" id="yearEnd" name="yearEndSaved[]" placeholder="Year End" value="{{ $vendorEducation->year_end }}" required
                                    />
                                </div>
                                @endforeach
                                <br>
                                <div id="vendorEducation">
                                    {{-- add new education details --}}
                                    <div class="form-group">
                                        <label for="">Institute: </label>
                                        <input type="text" id="institute" name="institute[]" placeholder="Institute Name" />
                                        <label for="">Degree/Diploma: </label>
                                        <input type="text" id="degree_diploma" name="degree_diploma[]" placeholder="Degree/Diploma" />
                                        <label for="">Year Start: </label>
                                        <input type="number" id="yearStart" name="yearStart[]" placeholder="Year Start" />
                                        <label for="">Year End: </label>
                                        <input type="number" id="yearEnd" name="yearEnd[]" placeholder="Year End" />
                                    </div>
                                </div>
                                <button class="btn btn-primary addEducationFieldBtn">Add another Field</button>
                            </div>
                            <div class="educationDetailHide owl-carousel nav-bottom custom-carousel-style-1 custom-item-padding custom-dots-style-1"
                                data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                                {{-- if there is only 1 education record --}} @if(count($vendorEducations)==1) @for ($i=0; $i
                                <count($vendorEducations);
                                    $i++) <div class="col-md-6 col-sm-6">
                                    <div class="custom-box-details-2 background-color-light custom-box-shadow-3">
                                        <i class="icon-graduation icons text-color-primary"></i>
                                        <h4 class="font-weight-semibold text-color-dark m-none">{{ $vendorEducations[$i]->institute }}</h4>
                                        <p class="custom-text-color-2 mb-xs">{{ $vendorEducations[$i]->degree_diploma }}</p>
                                        <strong class="text-color-primary">{{ $vendorEducations[$i]->year_start }}-{{ $vendorEducations[$i]->year_end }}</strong>
                                    </div>
                            </div>
                            @endfor @endif {{-- if there are multiple education records --}} @if(count($vendorEducations)>1) @for ($i=0; $i
                            <count($vendorEducations)-1;
                                $i++) <div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-box-details-2 background-color-light custom-box-shadow-3">
                                        <i class="icon-graduation icons text-color-primary"></i>
                                        <h4 class="font-weight-semibold text-color-dark m-none">{{ $vendorEducations[$i]->institute }}</h4>
                                        <p class="custom-text-color-2 mb-xs">{{ $vendorEducations[$i]->degree_diploma }}</p>
                                        <strong class="text-color-primary">{{ $vendorEducations[$i]->year_start }}-{{ $vendorEducations[$i]->year_end }}</strong>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-box-details-2 background-color-light custom-box-shadow-3">
                                        <i class="icon-graduation icons text-color-primary"></i>
                                        <h4 class="font-weight-semibold text-color-dark m-none">{{ $vendorEducations[$i+1]->institute }}</h4>
                                        <p class="custom-text-color-2 mb-xs">{{ $vendorEducations[$i+1]->degree_diploma }}</p>
                                        <strong class="text-color-primary">{{ $vendorEducations[$i+1]->year_start }}-{{ $vendorEducations[$i+1]->year_end }}</strong>
                                    </div>
                                </div>
                        </div>
                        @endfor @endif
                    </div>
                </div>
    </div>
</div>
</section>
</form>


<form action="{{ route('vendor.saveSkillsLanguageDetails', ['id'=>$vendor->id]) }}" method="post">
    @csrf
    <section id="skills" class="section section-no-border background-color-light m-none">
        <div class="container">
            <div class="row custom-sm-flex-order">
                <div id="skillsBtn">
                    <button type="button" class="btn btn-danger btn-lg" id="skillsEditBtn">
                        <span class="skillsEditBtn glyphicon glyphicon-pencil"></span>
                        <span class="skillsEditCancelBtn glyphicon glyphicon-remove"></span>
                    </button>
                    <button type="submit" class="skillsEditField btn btn-success btn-lg" id="skillsSaveBtn">
                        <span class="glyphicon glyphicon-ok"></span>
                    </button>
                </div>
                <div class="skillsEditField" style="width:100%">
                    <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Skills</h2>
                    {{-- already saved skills details --}} @foreach ($vendorSkills as $vendorSkill)
                    <div class="form-group">
                        <label for="">Skill: </label>
                        <input type="text" id="skill" name="skillSaved[]" placeholder="Skill" value="{{ $vendorSkill->skill }}" required />
                        <label for="">Level %: </label>
                        <input type="number" id="skillLevel" name="skillLevelSaved[]" placeholder="Level %" value="{{ $vendorSkill->level }}" required
                        />
                    </div>
                    @endforeach
                    <br>
                    <div id="vendorSkills">
                        {{-- add new skills details --}}
                        <div class="form-group">
                            <label for="">Skill: </label>
                            <input type="text" id="skill" name="skill[]" placeholder="Skill" />
                            <label for="">Level %: </label>
                            <input type="number" id="skillLevel" name="skillLevel[]" placeholder="Level %" />
                        </div>
                    </div>
                    <button class="btn btn-primary addSkillsFieldBtn">Add another Field</button>
                    <br>
                    <br>
                    <br>
                    <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Languages</h2>
                    {{-- already saved skills details --}} @foreach ($vendorLanguages as $vendorLanguage)
                    <div class="form-group">
                        <label for="">Language: </label>
                        <input type="text" id="language" name="languageSaved[]" placeholder="Language" value="{{ $vendorLanguage->language }}" required
                        />
                        <label for="">Level: </label>
                        <select id="languageLevel" name="languageLevelSaved[]">
                            <option value="0" <?php if($vendorLanguage->level == 0) echo 'selected="selected"'; ?>>Beginner</option>
                            <option value="1" <?php if($vendorLanguage->level == 1) echo 'selected="selected"'; ?>>Intermediate</option>
                            <option value="2" <?php if($vendorLanguage->level == 2) echo 'selected="selected"'; ?>>Advanced</option>
                        </select> {{-- <input type="number" id="languageLevel" name="languageLevelSaved[]"
                            placeholder="Level %" value="{{ $vendorLanguage->level }}" required /> --}}
                    </div>
                    @endforeach
                    <div id="vendorLanguage">
                        {{-- add new languages details --}}
                        <div class="form-group">
                            <label for="">Language: </label>
                            <input type="text" id="language" name="language[]" placeholder="Language" />
                            <label for="">Level: </label>
                            <select id="languageLevel" name="languageLevel[]">
                                <option value="0">Beginner</option>
                                <option value="1">Intermediate</option>
                                <option value="2">Advanced</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary addLanguageFieldBtn">Add another Field</button>
                </div>
                <div class="row">
                    <div class="skillsDetailHide col-md-8 col-sm-6 col-xs-12">
                        <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Skills & Language</h2>
                        <div class="progress-bars custom-progress-bars row">
                            @foreach ($vendorSkills as $vendorSkill)
                            <div class="col-xs-6">
                                <div class="progress-label text-color-dark font-weight-semibold text-uppercase text-sm">
                                    <span>{{ $vendorSkill->skill }}</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-appear-progress-animation="{{ $vendorSkill->level }}%"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="skillsDetailHide col-md-4 col-sm-6 col-xs-12">
                        <div class="custom-box-details background-color-light custom-box-shadow-1">
                            <h4 class="text-color-dark">Languages</h4>
                            <ul class="custom-list-style-1 p-none">
                                @foreach ($vendorLanguages as $vendorLanguage)
                                <li>
                                    <span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="{{ asset('vendorTemplate/img/blank.gif') }}" class="flag flag-us mr-xs" alt="English">{{ $vendorLanguage->language }}:</span>
                                    <span class="custom-text-color-2">
                                      @if($vendorLanguage->level == 0)
                                        Beginner
                                      @endif
                                      @if($vendorLanguage->level == 1)
                                        Intermediate
                                      @endif
                                      @if($vendorLanguage->level == 2)
                                        Advanced
                                      @endif
                                    </span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>


<section id="portfolio" class="section section-no-border background-color-secondary m-none">
    <div class="container">
        <div class="row">
            <div class="portfolioBtn">
                <a href="{{ route('vendor.portfolioManagmentPage', ['id'=>$vendor->id]) }}" class="btn btn-danger btn-lg" id="portfolioEditBtn">
                  <span class="portfolioEditBtn glyphicon glyphicon-pencil"></span>
              </a>
            </div>
            <div class="col-md-12">
                <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Portfolio</h2>
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

<section id="recommendations" class="section section-no-border background-color-primary m-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Recommendations</h2>
            </div>
            <div class="col-md-12 p-none">
                <div class="owl-carousel custom-dots-style-1 custom-dots-color-1 custom-dots-position-1 mb-none" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                    <div>
                        <div class="col-md-12">
                            <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                <blockquote class="pb-sm">
                                    <p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor,
                                        a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed
                                        placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu.
                                        Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin
                                        auctor gravida.</p>
                                </blockquote>
                                <div class="testimonial-author pull-left">
                                    <p><strong class="text-uppercase">Bob Doe</strong><span class="custom-text-color-3">Director
                                            of Engineering</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                <blockquote class="pb-sm">
                                    <p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor,
                                        a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed
                                        placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu.
                                        Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin
                                        auctor gravida.</p>
                                </blockquote>
                                <div class="testimonial-author pull-left">
                                    <p><strong class="text-uppercase">Bob Doe</strong><span class="custom-text-color-3">Director
                                            of Engineering</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="section section-no-border background-color-light m-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">My Blog</h2>
            </div>
            <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 custom-sm-margin-bottom-1">
                <article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"
                    data-appear-animation-duration="1s">
                    <span class="thumb-info-wrapper">
                        <a href="#">
                            <img src="{{ asset('vendorTemplate/img/demos/resume/blog/blog-1.jpg') }}" alt class="img-responsive" />
                        </a>
                    </span>
                    <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">
                            <h4 class="mb-sm">
                                <a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
                                    Design Driven
                                </a>
                            </h4>
                            <p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla
                                lobortis leo eget metus dapib...</p>
                        </span>
                    <hr class="solid m-none mt-xlg mb-sm">
                    <span class="custom-blog-post-date text-uppercase font-weight-semibold text-color-dark">
                            July 12-2017
                        </span>
                    <span class="custom-blog-post-share text-uppercase font-weight-semibold text-color-dark">
                            Share:
                            <ul>
                                <li>
                                    <a class="item-facebook text-decoration-none" href="#" class="text-uppercase" title="Share on Facebook">Facebook</a>
                                </li>
                                <li>
                                    <a class="item-twitter text-decoration-none" href="#" class="text-uppercase" title="Share on Twitter">Twitter</a>
                                </li>
                                <li>
                                    <a class="item-google-plus text-decoration-none" href="#" class="text-uppercase" title="Share on Google Plus">Google Plus</a>
                                </li>
                            </ul>
                        </span>
                    </span>
                </article>
            </div>
            <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0">
                <article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"
                    data-appear-animation-duration="1s">
                    <span class="thumb-info-wrapper">
                        <a href="#">
                            <img src="{{ asset('vendorTemplate/img/demos/resume/blog/blog-2.jpg') }}" alt class="img-responsive" />
                        </a>
                    </span>
                    <span class="thumb-info-caption">
                        <span class="thumb-info-caption-text">
                            <h4 class="mb-sm">
                                <a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
                                    UI, UX Concepts
                                </a>
                            </h4>
                            <p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique...</p>
                        </span>
                    <hr class="solid m-none mt-xlg mb-sm">
                    <span class="custom-blog-post-date text-uppercase font-weight-semibold text-color-dark">
                            July 12-2017
                        </span>
                    <span class="custom-blog-post-share text-uppercase font-weight-semibold text-color-dark">
                            Share:
                            <ul>
                                <li>
                                    <a class="item-facebook text-decoration-none" href="#" class="text-uppercase" title="Share on Facebook">Facebook</a>
                                </li>
                                <li>
                                    <a class="item-twitter text-decoration-none" href="#" class="text-uppercase" title="Share on Twitter">Twitter</a>
                                </li>
                                <li>
                                    <a class="item-google-plus text-decoration-none" href="#" class="text-uppercase" title="Share on Google Plus">Google Plus</a>
                                </li>
                            </ul>
                        </span>
                    </span>
                </article>
            </div>
            <div class="col-md-12 col-sm-12 pt-xlg mt-xlg center">
                <a class="btn btn-primary btn-borders text-color-dark custom-btn-style-2 font-weight-bold custom-border-radius-1 text-uppercase">View
                    All</a>
            </div>
        </div>
    </div>
</section>

<div id="say-hello" class="container-fluid">
    <div class="row">
        <div class="col-md-6 p-none">
            <section class="section section-no-border match-height background-color-primary m-none">
                <div class="row m-none">
                    <div class="col-half-section col-half-section-right mr-md">
                        <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Say Hello</h2>
                        <form id="callSendMessage" class="custom-form-style" action="#" method="POST">
                            <div class="form-content">
                                <div class="form-control-custom">
                                    <input type="text" class="form-control" name="callName" placeholder="Your Name *" data-msg-required="This field is required."
                                        id="callName" required="" />
                                </div>
                                <div class="form-control-custom">
                                    <input type="text" class="form-control" name="callSubject" placeholder="Subject *" data-msg-required="This field is required."
                                        id="callSubject" required="" />
                                </div>
                                <div class="form-control-custom">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*"
                                        id="message" required="" aria-required="true"></textarea>
                                </div>
                                <input type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1"
                                    value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6 p-none">
            <section class="section section-no-border match-height m-none" style="background-color:#43464B">
                <div class="row m-none">
                    <div class="col-half-section col-half-section-left ml-md">
                        <a href="mailto:{{$vendor->email}}" class="text-decoration-none">
                        <span class="feature-box custom-feature-box mb-xlg">
                            <span class="custom-feature-box-icon">
                                <i class="icon-envelope icons text-color-light"></i>
                            </span>
                            <span class="feature-box-info">
                                <label class="font-weight-semibold text-uppercase custom-text-color-1">Email</label>
                                <strong class="font-weight-light text-color-light custom-opacity-effect-1">{{ $vendor->email }}</strong>
                            </span>
                        </span>
                        </a>
                        <a href="tel:+1234657890" class="text-decoration-none">
                            <span class="feature-box custom-feature-box mb-xlg">
                                <span class="custom-feature-box-icon">
                                    <i class="icon-phone icons text-color-light"></i>
                                </span>
                                <span class="feature-box-info">
                                    <label class="font-weight-semibold text-uppercase custom-text-color-1">Phone</label>
                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">{{ $vendor->contact_number }}</strong>
                                </span>
                            </span>
                        </a>
                        <a href="skype:yourskype?chat" class="text-decoration-none">
                            <span class="feature-box custom-feature-box mb-xlg">
                                <span class="custom-feature-box-icon">
                                    <i class="icon-social-skype icons text-color-light"></i>
                                </span>
                                <span class="feature-box-info">
                                    <label class="font-weight-semibold text-uppercase custom-text-color-1">Skype</label>
                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">{{ $vendor->skype_id }}</strong>
                                </span>
                            </span>
                        </a> <span class="feature-box custom-feature-box mb-xlg">
                            <span class="custom-feature-box-icon">
                                <i class="icon-share icons text-color-light"></i>
                            </span>
                        <a href="{{ $vendor->facebook_id }}" class="text-decoration-none">
                                <span class="feature-box-info">
                                    <label class="font-weight-semibold text-uppercase custom-text-color-1">Follow
                                        me</label>
                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">Facebook</strong>
                                </span>
                            </a>
                        <a href="{{ $vendor->twitter_id }}" class="text-decoration-none">
                                <span class="feature-box-info custom-both-side-border">
                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">Twitter</strong>
                                </span>
                            </a>
                        <a href="{{ $vendor->linkedin_id }}" class="text-decoration-none">
                                <span class="feature-box-info p-none">
                                    <strong class="font-weight-light text-color-light custom-opacity-effect-1">Linkedin</strong>
                                </span>
                            </a>
                        </span>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
@endsection

@section('script')
<script src="{{ asset('vendorTemplate/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/jquery-cookie/jquery-cookie.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/common/common.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/jquery.validation/jquery.validation.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/vide/vide.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('vendorTemplate/js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('vendorTemplate/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('vendorTemplate/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('vendorTemplate/js/views/view.contact.js') }}"></script>

<!-- Demo -->
<script src="{{ asset('vendorTemplate/js/demos/demo-resume.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('vendorTemplate/js/theme.init.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('vendorTemplate/js/vendorDashboard.js') }}"></script>
@endsection