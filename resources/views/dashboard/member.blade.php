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
                <span>Dashboard</span>
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
                <div class="dashboard-widget mb-40">
                    <div class="dashboard-title mb-30">
                        <h5 class="title">My Activity</h5>
                    </div>
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/dashboard/01.png') }}" alt="dashboard">
                                </div>
                                @if(Auth::user()->level == 'admin')
                                <div class="content">
                                    <h2 class="title"><span class="counter">{{ $barangs }}</span></h2>
                                    <h6 class="info">Jumlah Lelang</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/dashboard/03.png') }}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">{{ $bidders }}</span></h2>
                                    <h6 class="info">Total Bidders</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/dashboard/03.png') }}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">{{ $pelalang }}</span></h2>
                                    <h6 class="info">Total Pelelang</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(Auth::user()->level == 'bidders' || Auth::user()->level == 'pelelang')
                        <div class="content">
                            <h2 class="title"><span class="counter">{{ $bid }}</span></h2>
                            <h6 class="info">Total Bids</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="dashboard-item">
                        <div class="thumb">
                            <img src="assets/images/dashboard/02.png" alt="dashboard">
                        </div>
                        <div class="content">
                            <h2 class="title"><span class="counter">{{ $winners }}</span></h2>
                            <h6 class="info">Winner Bids</h6>
                        </div>
                    </div>
                </div>
                @endif
                    </div>
                </div>
                <div class="dashboard-widget">
                    <h5 class="title mb-10">Histori Bidders</h5>
                    <div class="dashboard-purchasing-tabs">
                        <ul class="nav-tabs nav">
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active fade" id="current">
                                <table class="purchasing-table">
                                    <thead>
                                        <th>Name</th>
                                         <th>Date Time</th>
                                           <th>Nama Barang</th>
                                            <th>Jumlah Bid</th>
                                            <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($bids as $sds)
                                        <tr>
                                            <td>{{ $sds->name }}</td>
                      <td>{{ $sds->datetime }}</td>
                      <td>{{ $sds->nama_barang }}</td>
                      <td>Rp.{{ number_format($sds->jumlah_bid) }}</td>
                      <td> <a class="btn btn-info btn-sm" href="/detail/{{ $sds->id_barang }}">
                        <i class="fas fa-eye">
                        </i>
                     View
                    </a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                    {{ $bids->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->

@endsection