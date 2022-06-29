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
                <span>Personal Details</span>
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
            <div class="row">
                <div class="col-12">
                    <div class="dash-pro-item mb-30 dashboard-widget">
                        <div class="header">
                            <h4 class="title">Personal Details</h4>
                            @foreach ($users as $users)
                            <a href="/editprofile/{{ $users->id }}" span class="edit"><i class="flaticon-edit"></i> Edit</a>
                        </div>
                        <ul class="dash-pro-body">
                            <li>
                                <div class="info-name">Name</div>
                                <div class="info-value">{{ $users->name }}</div>
                            </li>
                            <li>
                                <div class="info-name">Level</div>
                                <div class="info-value">{{ $users->level }}</div>
                            </li>
                            <li>
                                <div class="info-name">Email</div>
                                <div class="info-value">{{ $users->email }}</div>
                            </li>
                            <li>
                                <div class="info-name">Password</div>
                                <div class="info-value">{{ $users->password }}</div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--============= Dashboard Section Ends Here =============-->

@endsection