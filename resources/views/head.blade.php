<!DOCTYPE html>
<html lang="en">
    <?php
    session_start ( ) ;
    ?>

<!-- Mirrored from pixner.net/sbidu/main/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 13:23:49 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach($logo as $s)
    <title>{{ $s->title }} - {{ $s->subtitle }}</title>
@endforeach
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>  
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>  
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
                        @foreach ($logo as $name)
                        <p style="color:rgb(248, 247, 247)">{{ $name->name_website }}</p>
                        @endforeach
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                    
                        <li>
                            <a href="{{route('lelang')}}">Lelang</a>
                        </li>
                      @if (auth()->user())
                    <li>
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    </li>

                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                   @endif
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
    <!--============= Cart Section Starts Here =============-->
               
                    </div>
                </div>
            </div>


            
            @yield('content')


            @include('sweetalert::alert')


        </div>
        </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function () {
          bsCustomFileInput.init();
        });
        </script>
          <script>
            $('.upgrade').click( function(){
              var usersid = $(this).attr('data-id');
              swal({
        title: "Apa anda yakin ?",
        text: "Kamu akan Mengupgrade account ke Pelelang "+usersid+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/successupgrade/"+usersid+" "
        } else {
          swal("Account gagal di upgrade");
        }
      });
            });
                 </script>
                 <script>
                $(".profile .icon_wrap").click(function(){
  $(this).parent().toggleClass("active");
  $(".notifications").removeClass("active");
});

$(".notifications .icon_wrap").click(function(){
  $(this).parent().toggleClass("active");
   $(".profile").removeClass("active");
});

$(".show_all .link").click(function(){
  $(".notifications").removeClass("active");
  $(".popup").show();
});

$(".close, .shadow").click(function(){
  $(".popup").hide();
});
                     </script>
                </body>


<!-- Mirrored from pixner.net/sbidu/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 13:22:47 GMT -->
</html>