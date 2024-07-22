@extends('layouts.master-without-nav')
@section('title')
    Landing
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <link href ="{{URL::asset('build/custom.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('body')

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    @endsection
    @section('content')
        {{-- @component('components.breadcrumb')
        @slot('li_1') Icons @endslot
        @slot('title') Landing @endslot
    @endcomponent --}}

        
        <body data-bs-spy="scroll" data-bs-target="#navbar-example">

            <!-- Begin page -->
            <div class="layout-wrapper landing">
                <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="index">
                            <img src="{{ URL::asset('build/images/logo-dark.png') }}" class="card-logo card-logo-dark"
                                alt="logo dark" height="60">
                            <img src="{{ URL::asset('build/images/logo-light.png') }}" class="card-logo card-logo-light"
                                alt="logo light" height="60">
                        </a>
                        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#hero">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services">Services</a>
                                </li>
                          
                                <li class="nav-item">
                                    <a class="nav-link" href="#plans">Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#reviews">Reviews</a>
                                </li>
                            </ul>

                            <div class="">
                                <a href="auth-signin-basic"
                                    class="btn btn-link fw-medium text-decoration-none text-dark">Sign
                                    in</a>
                                <a href="auth-signup-basic" class="btn btn-primary">Sign Up</a>
                            </div>
                        </div>

                    </div>
                </nav>
                <!-- end navbar -->
                <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

                <!-- start hero section -->
                <section class="section pb-0 hero-section" id="hero">
                    <div class="bg-overlay bg-overlay-pattern"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-sm-10">
                                <div class="text-center mt-lg-5 pt-5">
                                    <h1 class="display-6 fw-semibold mb-3 lh-base">Accelerate Your Website's Visibility with  <span class="text-success">WDM </span></h1>
                                    <p class="lead text-muted lh-base">Rapid URL Indexing for Enhanced SEO Performance.</p>

                                    <div class="d-flex gap-2 justify-content-center mt-4">
                                        <a href="auth-signup-basic" class="btn btn-primary">Get Started <i
                                                class="ri-arrow-right-line align-middle ms-1"></i></a>
                                        <a href="pages-pricing" class="btn btn-danger">View Plans <i
                                                class="ri-eye-line align-middle ms-1"></i></a>
                                    </div>
                                </div>

                                <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                                    <div class="demo-img-patten-top d-none d-sm-block">
                                        <img src="{{ URL::asset('build/images/landing/img-pattern.png') }}"
                                            class="d-block img-fluid" alt="...">
                                    </div>
                                    <div class="demo-img-patten-bottom d-none d-sm-block">
                                        <img src="{{ URL::asset('build/images/landing/img-pattern.png') }}"
                                            class="d-block img-fluid" alt="...">
                                    </div>
                                    <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                        <div class="carousel-inner p-2 rounded">
                                            <div class="carousel-item active" data-bs-interval="2000">
                                                <img src="{{ URL::asset('build/images/demos/pngwing.com.png') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="{{ URL::asset('build/images/demos/pngwing.com.png') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="{{ URL::asset('build/images/demos/pngwing.com.png') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="{{ URL::asset('build/images/demos/pngwing.com.png') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="{{ URL::asset('build/images/demos/pngwing.com.png') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="{{ URL::asset('build/images/demos/pngwing.com.png') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="{{ URL::asset('build/images/demos/pngwing.com.png') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                    <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 1440 120">
                            <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                                <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <!-- end shape -->
                </section>
                <!-- end hero section -->

                <!-- start client section -->
                <div class="pt-5 mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="text-center mt-5">
                                    <h5 class="fs-20">Trusted <span
                                            class="text-primary text-decoration-underline">by</span> the world's best</h5>

                                    <!-- Swiper -->
                                    <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="{{ URL::asset('build/images/clients/amazon.svg') }}"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="{{ URL::asset('build/images/clients/walmart.svg') }}"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="{{ URL::asset('build/images/clients/lenovo.svg') }}"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="{{ URL::asset('build/images/clients/paypal.svg') }}"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="{{ URL::asset('build/images/clients/shopify.svg') }}"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="client-images">
                                                    <img src="{{ URL::asset('build/images/clients/verizon.svg') }}"
                                                        alt="client-img" class="mx-auto img-fluid d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end client section -->

                <!-- start services -->
                <section class="section" id="services">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h1 class="mb-3 ff-secondary fw-semibold lh-base">Welcome to WDM, your go-to tool for optimizing your website's indexing on Google. </h1>
                                    <p class="text-muted">Our innovative platform is designed to help new and updated websites gain the visibility they deserve, ensuring that your content reaches your target audience quickly and effectively</p>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex p-3">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                                <i class="ri-pencil-ruler-2-line fs-36"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-18">Fast URL Submission</h5>
                                        <p class="text-muted my-3 ff-secondary">Submit your URLs and links to Google in seconds. Our streamlined process ensures that your content gets indexed rapidly.</p>
                                        <div>
                                            <a href="#" class="fs-13 fw-medium">Learn More <i
                                                    class="ri-arrow-right-s-line align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6">
                                <div class="d-flex p-3">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                                <i class="ri-google-fill fs-36"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-18">SEO Performance Tracking</h5>
                                        <p class="text-muted my-3 ff-secondary">Monitor your website's SEO performance with our comprehensive analytics tools. Understand how your indexed pages are performing and make informed decisions.</p>
                                        <div>
                                            <a href="#" class="fs-13 fw-medium">Learn More <i
                                                    class="ri-arrow-right-s-line align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="col-lg-6">
                                <div class="d-flex p-3">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                                <i class="ri-briefcase-5-line fs-36"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-18">Real-Time Updates</h5>
                                        <p class="text-muted my-3 ff-secondary">An industrial specialist works with
                                            industrial operations to ensure that manufacturing facilities work.</p>
                                        <div>
                                            <a href="#" class="fs-13 fw-medium">Learn More <i
                                                    class="ri-arrow-right-s-line align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6">
                                <div class="d-flex p-3">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                                <i class="ri-slideshow-line fs-36"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-18">User-Friendly Interface</h5>
                                        <p class="text-muted my-3 ff-secondary">Our intuitive interface makes it easy for anyone to enhance their website's indexing, regardless of technical expertise<div>
                                            <a href="#" class="fs-13 fw-medium">Learn More <i
                                                    class="ri-arrow-right-s-line align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end services -->
                <!-- start plan -->
                <section class="section bg-light" id="plans">
                    <div class="bg-overlay bg-overlay-pattern"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">SINGLE PACKAGES</h3>
                                    <p class="text-muted mb-4">To use the package you have 90 days from the activation date. Choose the package that is right for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">15 000 one-time links</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">14.99</span>  
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 90 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to 15 000 links within 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">30 000 one-time links</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">27.00</span>  
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 90 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to <b>30 000</b> links within 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">75 000 one-time links</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">54.00</span> 
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 90 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to <b>75 000</b> links within 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">25 000 one-time links</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">17.99</span> 
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to 25 000 links within 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">50 000 one-time links</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">27.00</span>
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to 50 000 links within 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">100 000 one-time links</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">34.00</span>
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to 100 000 links within 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="section bg-light" id="plans">
                    <div class="bg-overlay bg-overlay-pattern"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">DAILY PACKAGES</h3>
                                    <p class="text-muted mb-4">Daily packages are renewed at midnight. Choose the package that is right for you.</p>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row gy-4">
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">1 000 links per day</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">14.99</span>  
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to 1 000 links per day
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">5 000 links per day</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">23.00</span>  
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to <b>5 000</b> links day
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">10 000 links per day</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">34.00</span> 
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to <b>10 000</b> links per day
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">50 000 links per day</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">110.00</span> 
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to 50 000 links per day
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card plan-box mb-0">

                                    <div class="card-body p-4 m-2">
                                    
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">100 000 links per day</h5>
                                            </div>
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-light rounded-circle text-primary">
                                                    <i class="ri-book-mark-line fs-20"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 text-center">
                                            <h1 class="month"><sup><small>$</small></sup><span
                                                    class="ff-secondary fw-bold">205.00</span>
                                        </div>

                                        <div>
                                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         quickly index links
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to your account for 30 days
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         indexing up to 100 000 links per day
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         watch the progress of indexing
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         API access for many tools
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 text-success me-1">
                                                            <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                         access to the archives of the added links
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                 
                        <!--end row-->
                    </div>
                    <!-- end container -->
                </section>
                <!-- start faqs -->
                <section class="section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">Frequently Asked Questions</h3>
                                    <p class="text-muted mb-4 ff-secondary">If you can not find answer to your question in
                                        our FAQ, you can
                                        always contact us or email us. We will answer you shortly!</p>

                                    <div class="hstack gap-2 justify-content-center">
                                        <button type="button" class="btn btn-primary btn-label rounded-pill"><i
                                                class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                                            Email Us</button>
                                        <button type="button" class="btn btn-info btn-label rounded-pill"><i
                                                class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                                            Send Us Tweet</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row g-lg-5 g-4">
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0 me-1">
                                        <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-0 fw-semibold">General Questions</h5>
                                    </div>
                                </div>
                                <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"
                                    id="genques-accordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="genques-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#genques-collapseOne" aria-expanded="true"
                                                aria-controls="genques-collapseOne">
                                                How does WDM work ?
                                            </button>
                                        </h2>
                                        <div id="genques-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                            <div class="accordion-body ff-secondary">
                                            WDM helps you submit your URLs directly to Google, speeding up the indexing process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="genques-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo"
                                                aria-expanded="false" aria-controls="genques-collapseTwo">
                                                Is there a limit to how many URLs I can submit ?
                                            </button>
                                        </h2>
                                        <div id="genques-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                            <div class="accordion-body ff-secondary">
                                            We offer flexible plans that cater to different needs, including unlimited submissions for premium users.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="genques-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#genques-collapseThree"
                                                aria-expanded="false" aria-controls="genques-collapseThree">
                                                Do I need technical skills to use WDM ?
                                            </button>
                                        </h2>
                                        <div id="genques-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                            <div class="accordion-body ff-secondary">
                                            No technical skills are required! Our user-friendly interface is designed for everyone, making the process simple and straightforward.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="genques-headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#genques-collapseFour"
                                                aria-expanded="false" aria-controls="genques-collapseFour">
                                                Can I track the performance of my indexed pages ?
                                            </button>
                                        </h2>
                                        <div id="genques-collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                            <div class="accordion-body ff-secondary">
                                            Absolutely! Our platform provides analytics tools that allow you to monitor the performance and visibility of your indexed pages.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end accordion-->

                            </div>
                            <!-- end col -->
                      
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end faqs -->

                <!-- start review -->
                <section class="section bg-primary" id="reviews">
                    <div class="bg-overlay bg-overlay-pattern"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="text-center">
                                    <div>
                                        <i class="ri-double-quotes-l text-success display-3"></i>
                                    </div>
                                    <h4 class="text-white mb-5"><span class="text-success">19k</span>+ Satisfied clients
                                    </h4>

                                    <!-- Swiper -->
                                    <div class="swiper client-review-swiper rounded" dir="ltr">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="row justify-content-center">
                                                    <div class="col-10">
                                                        <div class="text-white-50">
                                                            <p class="fs-20 ff-secondary mb-4">" WDM helped my new blog get indexed within days! I saw a significant increase in traffic. "</p>

                                                            <div>
                                                                <h5 class="text-white">Sarah J</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end slide -->
                                            <div class="swiper-slide">
                                                <div class="row justify-content-center">
                                                    <div class="col-10">
                                                        <div class="text-white-50">
                                                            <p class="fs-20 ff-secondary mb-4">" I love how easy it is to submit my URLs. This tool has become essential for my SEO efforts. "</p>

                                                            <div>
                                                                <h5 class="text-white">Mark T</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end slide -->
                                            <div class="swiper-slide">
                                                <div class="row justify-content-center">
                                                    <div class="col-10">
                                                        <div class="text-white-50">
                                                            <p class="fs-20 ff-secondary mb-4">" I was amazed at how quickly my updated pages were indexed. This tool is essential for anyone serious about their online presence! "</p>

                                                            <div>
                                                                <h5 class="text-white">David M</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end slide -->
                                        </div>
                                        <div class="swiper-button-next bg-white rounded-circle"></div>
                                        <div class="swiper-button-prev bg-white rounded-circle"></div>
                                        <div class="swiper-pagination position-relative mt-2"></div>
                                    </div>
                                    <!-- end slider -->
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end review -->

                <!-- start counter -->
                <!-- <section class="py-5 position-relative bg-light">
                    <div class="container">
                        <div class="row text-center gy-4">
                            <div class="col-lg-3 col-6">
                                <div>
                                    <h2 class="mb-2"><span class="counter-value" data-target="100">0</span>+</h2>
                                    <div class="text-muted">Projects Completed</div>
                                </div>
                            </div>
                      

                            <div class="col-lg-3 col-6">
                                <div>
                                    <h2 class="mb-2"><span class="counter-value" data-target="24">0</span></h2>
                                    <div class="text-muted">Win Awards</div>
                                </div>
                            </div>
                       

                            <div class="col-lg-3 col-6">
                                <div>
                                    <h2 class="mb-2"><span class="counter-value" data-target="20.3">0</span>k</h2>
                                    <div class="text-muted">Satisfied Clients</div>
                                </div>
                            </div>
                          
                            <div class="col-lg-3 col-6">
                                <div>
                                    <h2 class="mb-2"><span class="counter-value" data-target="50">0</span></h2>
                                    <div class="text-muted">Employees</div>
                                </div>
                            </div>
                      
                        </div>
                     
                    </div>
                   
                </section> -->
                <!-- end counter -->

                <!-- start Work Process -->
                <section class="section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center mb-5">
                                    <h3 class="mb-3 fw-semibold">Our Benefits</h3>
                                     
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row text-center">
                            <div class="col-lg-4">
                                <div class="process-card mt-4">
                                    <div class="process-arrow-img d-none d-lg-block">
                                        <img src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="avatar-sm icon-effect mx-auto mb-4">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                            <i class="ri-quill-pen-line"></i>
                                        </div>
                                    </div>

                                    <h5>1. Boost Your Visibility</h5>
                                    <p class="text-muted ff-secondary">Increase your chances of being found on Google with faster indexing, leading to more traffic and potential customers.</p>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-4">
                                <div class="process-card mt-4">
                                    <div class="process-arrow-img d-none d-lg-block">
                                        <img src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="avatar-sm icon-effect mx-auto mb-4">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                            <i class="ri-user-follow-line"></i>
                                        </div>
                                    </div>

                                    <h5>2. Ideal for New Websites</h5>
                                    <p class="text-muted ff-secondary">Perfect for startups and new projects that need quick recognition in search engines.</p>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-4">
                                <div class="process-card mt-4">
                                    <div class="avatar-sm icon-effect mx-auto mb-4">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                            <i class="ri-book-mark-line"></i>
                                        </div>
                                    </div>

                                    <h5>3. Enhance Your SEO Strategy</h5>
                                    <p class="text-muted ff-secondary">Integrate WDM into your SEO strategy to improve your website's ranking and visibility.</p>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end Work Process -->
                <!-- start cta -->
                <section class="py-5 bg-primary position-relative">
                    <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-sm">
                                <div>
                                    <h6 class="text-white mb-0 fw-semibold">Sign up for WDM and take the first step towards improving your website's SEO performance. Experience the difference of rapid indexing!
                                    </h6>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-sm-auto">
                                <div>
                                    <a href="https://1.envato.market/velzon-admin" target="_blank"
                                        class="btn bg-gradient btn-danger"><i
                                            class="ri-shopping-cart-2-line align-middle me-1"></i> Get Started Today!</a>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end cta -->

                <!-- Start footer -->
                <footer class="custom-footer bg-dark py-3 position-relative">
                    <div class="container">
                        

                        <div class="row text-center text-sm-start align-items-center mt-5">
                            <div class="col-sm-6">

                                <div>
                                    <p class="copy-rights mb-0">
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> © Velzon - Themesbrand
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end mt-3 mt-sm-0">
                                    <ul class="list-inline mb-0 footer-social-link">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-facebook-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-github-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-linkedin-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-google-fill"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="avatar-xs d-block">
                                                <div class="avatar-title rounded-circle">
                                                    <i class="ri-dribbble-line"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end footer -->

                <!--start back-to-top-->
                <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
                    <i class="ri-arrow-up-line"></i>
                </button>
                <!--end back-to-top-->

            </div>
            <!-- end layout wrapper -->
        
        </body>
 
    @endsection
    @section('script')
        <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ URL::asset('build/js/pages/landing.init.js') }}"></script>
    @endsection
