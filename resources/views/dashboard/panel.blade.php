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
                <span>Controll Website</span>
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
                    <h5 class="title mb-10">Controll Website</h5>
                    <div class="dashboard-purchasing-tabs">
                        <ul class="nav-tabs nav">
                        </ul>
                        @foreach($logo as $qss)
                        <form action="{{ route('updatepanel') }}" method="post">
                          {{ csrf_field() }}
                          <div class="form-group">
                            <label for="inputName">Nama Website</label>
                            <input type="text" name="name_website" id="name_website" value="{{ $qss->name_website }}" class="form-control">
                          </div>
                        <div class="form-group">
                          <label for="inputName">Title</label>
                          <input type="text" name="title" id="title" value="{{ $qss->title }}" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="inputName">Subtitle</label>
                          <input type="text" name="subtitle" id="subtitle" value="{{ $qss->subtitle }}" class="form-control">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
              </form>
              @endforeach
                            </div>
</section>
<!--============= Dashboard Section Ends Here =============-->

@endsection