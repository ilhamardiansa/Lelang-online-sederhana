<div class="row justify-content-center">
    <div class="col-sm-10 col-md-7 col-lg-4">
        <div class="dashboard-widget mb-30 mb-lg-0">
            <div class="user">
                <div class="thumb-area">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/dashboard/user.png') }}" alt="user">
                    </div>
                </div>
                <div class="content">
                    <h5 class="title"><a href="#">{{ Auth::user()->name }}</a></h5>
                </div>
            </div>
            <ul class="dashboard-menu">
                <li>
                    <a href="{{route('dashboard')}}"><i class="flaticon-dashboard"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{route('personalprofile')}}"><i class="flaticon-settings"></i>Personal Profile </a>
                </li>
                <li>
                    <a href="{{route('winners')}}"><i class="flaticon-best-seller"></i>Winners Bids</a>
                </li>
                @if(Auth::user()->level == 'admin')
                <li>
                    <a href="{{route('userscontroll')}}"><i class="flaticon-settings"></i>Controll Users </a>
                </li>
                <li>
                    <a href="{{route('lelangcontroll')}}"><i class="flaticon-settings"></i>Controll Lelang </a>
                </li>
                <li>
                    <a href="{{route('konfirmasipayment')}}"><i class="flaticon-settings"></i>Konfrimasi Pembayaran</a>
                </li>
                <li>
                    <a href="{{route('website')}}"><i class="flaticon-settings"></i>Website Controll </a>
                </li>
                <li>
                    <a href="{{route('addlelang')}}"><i class="flaticon-auction"></i>Add Lelang </a>
                </li>
                
                @endif
                @if(Auth::user()->level == 'pelelang')
                <li>
                    <a href="{{route('lelangcontroll')}}"><i class="flaticon-settings"></i>Controll Lelang </a>
                </li>
                <li>
                    <a href="{{route('addlelang')}}"><i class="flaticon-auction"></i>Add Lelang </a>
                </li>
                @endif
                @if(Auth::user()->level == 'bidders')
                <li>
                    <a href="{{route('upgradeacc')}}"><i class="flaticon-settings"></i>Upgrade Account </a>
                </li>
                @endif
            </ul>
        </div>
    </div>