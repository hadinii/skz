<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Konsultasi Zakat Online - Baznas Kota Pekanbaru</title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing page template for creative dashboard">
    <meta name="keywords" content="Landing page template">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('adminty\extra-pages\landingpage\assets\logos\favicon.ico') }}" type="image/png" sizes="16x16">
    <!-- Bootstrap -->
    <link href="{{ asset('adminty\extra-pages\landingpage\assets\css\bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('adminty\extra-pages\landingpage\assets\css\animate.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('adminty\extra-pages\landingpage\assets\css\owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('adminty\extra-pages\landingpage\assets\css\owl.theme.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('adminty\extra-pages\landingpage\assets\css\magnific-popup.css') }}">
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty\assets\pages\notification\notification.css') }}">
    <!-- Full Page Animation -->
    <link rel="stylesheet" href="{{ asset('adminty\extra-pages\landingpage\assets\css\animsition.min.css') }}">
    <!-- Ionic Icons -->
    <link rel="stylesheet" href="{{ asset('adminty\extra-pages\landingpage\assets\css\ionicons.min.css') }}">
    <!-- Main Style css -->
    <link href="{{ asset('adminty\extra-pages\landingpage\assets\css\style.css') }}" rel="stylesheet" type="text/css" media="all">
    {{-- reCAPTCHA --}}
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
</head>
<body>

    <div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
        <div class="container">
             <nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <a class="navbar-brand page-scroll" href="#main"><img src="{{ asset('adminty\assets\images\baznas_header.png') }}" alt="adminity Logo" height="40"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav my-2 my-lg-0">
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#main">Home</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link page-scroll" href="#services">Important</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#features">Benefits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#reviews">Testimonials</a>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link page-scroll" href="#konsultasi">Konsultasi</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main" id="main">
            <!-- Main Section-->
            <div class="hero-section app-hero">
                <div class="container">
                    <div class="hero-content app-hero-content text-center">
                        <div class="row justify-content-md-center">
                            <div class="col-md-10">
                                <h1 class="wow fadeInUp" data-wow-delay="0s">Konsultasi Zakat Online</h1>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Konsultasi zakat, cepat dan mudah. Dijawab langsung oleh oleh ahli-nya. <br class="hidden-xs"> Konsultasikan zakat anda sekarang!
                                </p>
                                <a class="btn btn-primary btn-action" data-wow-delay="0.5s" href="#konsultasi">Konsultasi</a>
                            </div>
                            <div class="col-md-12">
                                <div class="hero-image">
                                    <img class="img-fluid" src="{{ asset('adminty\extra-pages\landingpage\assets\images\app_hero_1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="services-section text-center" id="services">
                <!-- Services section (small) with icons -->
                <div class="container">
                    <div class="row  justify-content-md-center">
                        <div class="col-md-8">
                            <div class="services-content">
                                <h1 class="wow fadeInUp" data-wow-delay="0s">We take care our products for more feature rich</h1>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Adminty is one of the finest Admin dashboard template in its category. Premium admin dashboard with high end feature rich possibilities.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="services">
                                <div class="row">
                                    <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="services-icon">
                                            <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\icon1.png') }}" height="60" width="60" alt="Service">
                                        </div>
                                        <div class="services-description">
                                            <h1>Mega feature rich</h1>
                                            <p>
                                                Adminty is one of unique dashboard template which come with tons of ready to use feature. We continuous working on it to provide latest updates in digital market.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="services-icon">
                                            <img class="icon-2" src="{{ asset('adminty\extra-pages\landingpage\assets\logos\icon2.png') }}" height="60" width="60" alt="Service">
                                        </div>
                                        <div class="services-description">
                                            <h1>Fast and Robust</h1>
                                            <p>
                                                We are contantly working on Adminty and improve its performance too. Your definitely give higher rating to Adminty for its performance.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="services-icon">
                                            <img class="icon-3" src="{{ asset('adminty\extra-pages\landingpage\assets\logos\icon3.png') }}" height="60" width="60" alt="Service">
                                        </div>
                                        <div class="services-description">
                                            <h1>FLAT UI-Interface</h1>
                                            <p>
                                                Adminty is first ever admin dashboard template which release in Bootstrap 4 framework. Intuitive feature rich design concept and color combination.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-features" id="features">
                <div class="container">
                    <div class="flex-split">
                        <div class="f-left wow fadeInUp" data-wow-delay="0s">
                            <div class="left-content">
                                <img class="img-fluid" src="{{ asset('adminty\extra-pages\landingpage\assets\images\feature_1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
                            <div class="right-content">
                                <h2>High performance and flexible code</h2>
                                <p>
                                    Guru Able is full flexible solution for your entire project development. You can easily maintain all of its module/components.
                                </p>
                                <ul>
                                    <li><i class="ion-android-checkbox-outline"></i>Neat n clean code structure.</li>
                                    <li><i class="ion-android-checkbox-outline"></i>Flexible module structure</li>
                                    <li><i class="ion-android-checkbox-outline"></i>Copy / Paste and Ready to use</li>
                                </ul>
                                <button class="btn btn-primary btn-action btn-fill">Learn More</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex-split">
                        <div class="f-right">
                            <div class="right-content wow fadeInUp" data-wow-delay="0.2s">
                                <h2>Included Software Dependencies</h2>
                                <p>
                                    Bower - Grunt - Sass Dependencies for easy project flow management.
                                </p>
                                <ul>
                                    <li><i class="ion-android-checkbox-outline"></i>Grunt - No need to update plugins manually</li>
                                    <li><i class="ion-android-checkbox-outline"></i>Grunt - Less work you have to performance</li>
                                    <li><i class="ion-android-checkbox-outline"></i>Sass - Most Powerful CSS extension language</li>
                                </ul>
                                <button class="btn btn-primary btn-action btn-fill">Learn More</button>
                            </div>
                        </div>
                        <div class="f-left">
                            <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
                                <img class="img-fluid" src="{{ asset('adminty\extra-pages\landingpage\assets\images\feature_2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-section" id="reviews">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="testimonials owl-carousel owl-theme">
                                <div class="testimonial-single"><img class="img-circle" src="{{ asset('adminty\extra-pages\landingpage\assets\images\testimonial2.jpg') }}" alt="Client Testimonoal">
                                    <div class="testimonial-text wow fadeInUp" data-wow-delay="0.2s">
                                        <p>Totally flexible admin template. Easy to use and easy to manage all the elements in entire theme. <br class="hidden-xs"> Great support team behind this product. Low turnaround time with exact support which i needed.
                                        </p>
                                        <h3>Code Quality</h3>
                                        <h3> - amit1134 [Buyer - NZ]</h3>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                    </div>
                                </div>
                                <div class="testimonial-single"><img class="img-circle" src="{{ asset('adminty\extra-pages\landingpage\assets\images\testimonial1.jpg') }}" alt="Client Testimonoal">
                                    <div class="testimonial-text">
                                        <p>The main reason for the Rating for Able pro admin template is that its is awesome template with tons of ready to use features.<br class="hidden-xs"> - Top quality - Regular updates - PHP version - Clean n Neat code
                                            - Saves lots of developing time
                                        </p>
                                        <h3>Flexibility</h3>
                                        <h3>- vishalmg [Buyer -India]</h3>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-ios-star-half"></i>
                                    </div>
                                </div>
                                <div class="testimonial-single"><img class="img-circle" src="{{ asset('adminty\extra-pages\landingpage\assets\images\testimonial3.jpg') }}" alt="Client Testimonoal">
                                    <div class="testimonial-text">
                                        <p>5 stars are for the excellent support, that is brilliant! The design is very cool and the quality of code is excellent. <br class="hidden-xs">Compliments!</p>
                                        <h3>Code Quality</h3>
                                        <h3>- ab69aho [Buyer -Italy]</h3>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-ios-star-half"></i>
                                    </div>
                                </div>
                                <div class="testimonial-single"><img class="img-circle" src="{{ asset('adminty\extra-pages\landingpage\assets\images\testimonial2.jpg') }}" alt="Client Testimonoal">
                                    <div class="testimonial-text">
                                        <p>The product is high end and high-end specialized assistance in solving problems. <br class="hidden-xs">I would highly recommend.</p>
                                        <h3>Customer Support</h3>
                                        <h3>- donpavulon [Buyer -US]</h3>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                        <i class="ion ion-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature Image Big -->
            <div class="feature_huge text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="{{ asset('adminty\extra-pages\landingpage\assets\images\big_feature.png') }}" alt="" style="max-width:100%">
                        </div>
                        <div class="col-md-12 feature_list">
                            <div class="row">
                                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\feature_icon.png') }}" alt="Feature">
                                    <h1>Tursted Product</h1>
                                    <p>
                                        We increasingly grow our talent and skills in admin dashboard development.
                                    </p>
                                </div>
                                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\feature_icon_2.png') }}" alt="Feature">
                                    <h1>Online Documentation</h1>
                                    <p>
                                        Documentation helps you in every steps on your entire project.
                                    </p>
                                </div>
                                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\feature_icon_3.png') }}" alt="Feature">
                                    <h1>Free Updates & Support</h1>
                                    <p>
                                        Fast and accurate outline during support. Low turnaround time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Section -->
            <div class="counter-section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-6 col-md-3">
                            <div class="counter-up">
                                <div class="counter-icon">
                                    <i class="ion-android-download"></i>
                                </div>
                                <h3><span class="counter">250</span>+</h3>
                                <div class="counter-text">
                                    <h4>Pages</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="counter-up">
                                <div class="counter-icon">
                                    <i class="ion-cube"></i>
                                </div>
                                <h3><span class="counter">1000</span>+</h3>
                                <div class="counter-text">
                                    <h4>UI Elements</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="counter-up">
                                <div class="counter-icon">
                                    <i class="ion-ios-people"></i>
                                </div>
                                <h3><span class="counter">500</span>+</h3>
                                <div class="counter-text">
                                    <h4>Form Elements</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="counter-up">
                                <div class="counter-icon">
                                    <i class="ion-ios-paper"></i>
                                </div>
                                <h3><span class="counter">80</span>+</h3>
                                <div class="counter-text">
                                    <h4>Widgets</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Section Ends -->
            <div class="features-section">
                <!-- Feature section with flex layout -->
                <div class="f-left">
                    <div class="left-content wow fadeInLeft" data-wow-delay="0s">
                        <h2 class="wow fadeInLeft" data-wow-delay="0.1s">We are available for custom work development</h2>
                        <p class="wow fadeInLeft" data-wow-delay="0.2s">
                            We at Adminty available for custom work development with High end specialized developer.
                        </p>
                        <button class="btn btn-primary btn-action btn-fill wow fadeInLeft" data-wow-delay="0.2s">Click to send query</button>
                    </div>
                </div>
                <div class="f-right">
                </div>
            </div> --}}
            <!-- Pricing Section -->
            <div class="pricing-section no-color text-center" id="konsultasi">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="pricing-intro">
                                <h1 class="wow fadeInUp" data-wow-delay="0s">Konsultasi Online</h1>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Jika anda memiliki pertanyaan seputar zakat, silakan mengisi form berikut ini. <br class="hidden-xs"> Pertanyaan anda akan dijawab oleh ahli-nya.
                                </p>
                            </div>
                            <form class="md-float-material form-material" method="POST" action="{{ route('konsultasi.store') }}">
                                @csrf
                                @if($errors->any())
                                <div class="alert alert-warning background-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="icofont icofont-close-line-circled text-white"></i>
                                    </button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama
                                                <small>*</small>
                                            </label>
                                            <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email
                                                <small>*</small>
                                            </label>
                                            <input class="form-control" type="email" name="email" id="email" placeholder="Masukkan Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pertanyaan
                                                <small>*</small>
                                            </label>
                                            <textarea class="form-control" name="pertanyaan" rows="5" placeholder="Tuliskan Pertanyaan Anda." required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    {!! htmlFormSnippet() !!}
                                </div>
                                <button type="submit" class="btn btn-primary btn-action mt-5">Kirim</button>
                                {{-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client Section -->
            {{-- <div class="client-section">
                <div class="container text-center">
                    <div class="clients owl-carousel owl-theme">
                        <div class="single">
                            <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\logo1.png') }}" alt="">
                        </div>
                        <div class="single">
                            <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\logo2.png') }}" alt="">
                        </div>
                        <div class="single">
                            <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\logo3.png') }}" alt="">
                        </div>
                        <div class="single">
                            <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\logo4.png') }}" alt="">
                        </div>
                        <div class="single">
                            <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\logo6.png') }}" alt="">
                        </div>
                        <div class="single">
                            <img src="{{ asset('adminty\extra-pages\landingpage\assets\logos\logo7.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subscribe Form -->
            <div class="cta-sub text-center no-color">
                <div class="container">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">New product notification subscription</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        We sent you daily mail about product updates / releases / version change logs<br class="hidden-xs">Please write accurate email address below.
                    </p>
                    <div class="form wow fadeInUp" data-wow-delay="0.3s">
                        <form class="subscribe-form wow zoomIn" action="{{ asset('adminty\extra-pages\landingpage\assets/php/subscribe.php') }}" method="post" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate="">
                            <input class="mail" type="email" name="email" placeholder="Email address" autocomplete="off"><input class="submit-button" type="submit" value="Subscribe">
                        </form>
                        <div class="success-message"></div>
                        <div class="error-message"></div>
                    </div>
                </div>
            </div> --}}
            <!-- Footer Section -->
            <div class="footer">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('adminty\assets\images\logo1.png') }}" alt="Adminty Logo" width="150">
                        <ul class="footer-menu">
                            <li><a href="#">Site</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        <div class="footer-text">
                            <p>
                                Copyright © 2022 Baznas Kota Pekanbaru. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scroll To Top -->
            <a id="back-top" class="back-to-top page-scroll" href="#main">
                <i class="ion-ios-arrow-thin-up"></i>
            </a>
            <!-- Scroll To Top Ends-->
        </div>
        <!-- Main Section -->
    </div>
    <!-- Wrapper-->
    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="{{ asset('adminty\extra-pages\landingpage\assets\js\jquery-2.1.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\extra-pages\landingpage\assets\js\bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\extra-pages\landingpage\assets\js\plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\extra-pages\landingpage\assets\js\menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\extra-pages\landingpage\assets\js\custom.js') }}"></script>
    <!-- notification js -->
    <script type="text/javascript" src="{{ asset('adminty\assets\js\bootstrap-growl.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminty\assets\pages\notification\notification.js') }}"></script>
    <script>
        // show success notification on success
        @if ($message = session('success'))
            const message = '{{ $message }}'
            notify('fas fa-check', 'success', message);
        @endif
    </script>
</body>
</html>
