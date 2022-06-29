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
                <span>Users Update</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{ asset('assets/images/banner/hero-bg.png') }}"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        @include('dashboard/dash')
        <div class="col-lg-8">
                <div class="dashboard-widget">
                    <h5 class="title mb-10">Users Update</h5>
                    <div class="dashboard-purchasing-tabs">
                        <ul class="nav-tabs nav">
                        </ul>
                            <form action="{{route('successuser')}}" method="post">
                                {{ csrf_field() }}
                                @foreach ( $users as $userss)
                                                <input type="hidden" name="id" id="id" value="{{ $userss->id }}">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Username</label>
                                                    <input type="text" class="form-control" required="required" name="name" id="name" value="{{ $userss->name }}">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="exampleSelectRounded0">Level</label>
                                                    <select class="custom-select rounded-0" name="level" id="level">
                                                      <option value="admin">Admin</option>
                                                      <option value="pelelang">Pelelang</option>
                                                      <option value="bidders">Bidders</option>
                                                    </select>
                                                  </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email"id="email" value="{{ $userss->email }}">
                                              </div>
                                            </div>
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            @endforeach
                                          </form>
                            </div>
</section>
<!--============= Dashboard Section Ends Here =============-->

@endsection