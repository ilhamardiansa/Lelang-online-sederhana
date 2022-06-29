<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/sbidu/main/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 13:23:49 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sbidu - Bid And Auction HTML Template</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                     
                       
                    </ul>
                    <ul class="cart-button-area">
                                              
                        <li>
                            <a href="{{ route('login') }}" class="user-button"><i class="flaticon-user"></i></a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('lelang')}}">Lelang</a>
                        </li>
                    </ul>
                    
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Hero Section Starts Here =============-->
 <div class="hero-section">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="#0">Pages</a>
            </li>
            <li>
                <span>Reset Password</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{ asset('assets/images/banner/hero-bg.png') }}"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Account Section Starts Here =============-->
<section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side">
                <div class="section-header">
                    <h2 class="title">Reset Password</h2>
                </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="login-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="far fa-envelope"></i></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">Send Verification Link</button>
                    </div>
                </form>
            </div>
            <div class="right-side cl-white">
                <div class="section-header mb-0">
                    <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                    <p>Log in and go to your Dashboard.</p>
                    <a href="{{ route('login') }}" class="custom-button transparent">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Account Section Ends Here =============-->




    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="{{ asset('assets/images/footer/footer-bg.jpg') }}">
        <div class="footer-top-shape">
            <img src="{{ asset('assets/css/img/footer-top-shape.png') }}" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="{{ asset('assets/images/footer/p1.png') }}" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="{{ asset('assets/images/footer/p2.png') }}" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="{{ asset('assets/images/footer/p3.png') }}" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="{{ asset('assets/images/footer/c2.png') }}" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="{{ asset('assets/images/footer/c3.png') }}" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="{{ asset('assets/images/footer/c4.png') }}" alt="footer">
            </div>
        </div>
        
                </div>
            </div>
        </div>
      
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/yscountdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


<!-- Mirrored from pixner.net/sbidu/main/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 13:23:14 GMT -->
</html>

