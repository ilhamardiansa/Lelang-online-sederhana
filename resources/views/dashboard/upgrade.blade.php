@extends('head')
@section('content')


</div>
</div>
</div>


 <!--============= Hero Section Starts Here =============-->
 <div class="hero-section style-2 pb-lg-400">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="#0">My Account</a>
            </li>
            <li>
                <span>Upgrade Account</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        @include('dashboard/dash')
        <div class="col-lg-8">
                <div class="dashboard-widget">
                        <div class="tab-content">
                            <div class="section-header">
                            <h5 class="cate">Upgrade Account</h5>
                            <h2 class="title">Join Jadi Pelelang</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <h4>Upgrade Account Ke Pelelang Sekarang Juga!</h4>
                                <br>
                                      <p>
                                     Buruan JOIN dengan 1000+ pelelang yang sudah terdaftar <br>
                                     dan nikmati keuntungan yang akan kalian dapat. <br>
                                     <br>
                
                                     Caranya cukup gampang tanpa dipungut biaya sama sekali.
                                      </p>
                            </div>
                            <div class="col-xl-4 col-lg-5 d-lg-block d-none">
                                <img src="assets/images/contact.png" class="w-100" alt="images">
                            </div>
                        </div>
                        <button class="btn btn-primary upgrade" data-id="{{ Auth::user()->id }}">Upgrade Sekarang</button>
                      </div>
                        </div>
                    </div>
                </div>
            </section>
<!--============= Dashboard Section Ends Here =============-->

@endsection