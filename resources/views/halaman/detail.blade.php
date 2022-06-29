@extends('head')
@section('content')


</div>
</div>
</div>


<!--============= Hero Section Starts Here =============-->
<div class="hero-section style-2">
<div class="container">
<ul class="breadcrumb">
    <li>
        <a href="index.html">Home</a>
    </li>
    <li>
        <a href="#0">Pages</a>
    </li>
    <li>
        <span>Detail Product</span>
    </li>
</ul>
</div>
<div class="bg_img hero-bg bottom_center" data-background="{{ asset('assets/images/banner/hero-bg.png') }}"></div>
</div>
<!--============= Hero Section Ends Here =============-->

@if ($barangs->status == '1')
    <!--============= Product Details Section Starts Here =============-->
<section class="product-details padding-bottom mt--240 mt-lg--440">
    <div class="container">
    <div class="product-details-slider-top-wrapper">
        <div class="product-details-slider owl-theme owl-carousel" id="sync1">
            <div class="slide-top-item">
                <div class="slide-inner">
                    <img src="{{ url('uploads') }}/{{ $barangs->gambar }}" alt="product">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-40-60-80">
        <div class="col-lg-8">
            <div class="product-details-content">
                <div class="product-details-header">
                    <h2 class="title">{{ $barangs->nama_barang }}</h2>
                    <ul>
                        <li>Item #{{ $barangs->kode_barang }}</li>
                    </ul>
                </div>
                <ul class="price-table mb-30">
                    <li class="header">
                        <h5 class="current">Open BID</h5>
                        <h3 class="price">Rp.{{ number_format($barangs->open_bid) }}</h3>
                    </li>
                    <li>
                        <span class="details">Last Bid</span>
                        <h5 class="info">Rp.{{ number_format($lastbid) }}</h5>
                    </li>
                </ul>
                <div class="product-bid-area">
                    <form action="{{route('addbid')}}" method="post" class="product-bid-form">
                        {{ csrf_field() }}
                        <div class="search-icon">
                            <img src="{{ asset('assets/images/product/search-icon.png') }}" alt="product">
                        </div>
                         {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        <input type="hidden" name="id_barang" id="id_barang" data-id="{{ $barangs->id }}" value="{{ $barangs->id }}">
                        <input type="hidden" name="last_bid" id="last_bid" value="{{ $lastbid }}">
                        <input type="hidden" name="nama_barang" id="nama_barang" value="{{ $barangs->nama_barang }}">
                        <input type="text" name="bid" id="bid" placeholder="Enter you bid amount">
                        <button type="submit" class="custom-button">Submit a bid</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-sidebar-area">
                <div class="product-single-sidebar mb-3">
                    <h6 class="title">This Auction Ends in:</h6>
                    <div class="countdown" id="countdown">
                        <div id="bid_counter1"></div>
                    </div>
                    <div class="side-counter-area">
                        <div class="side-counter-item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/product/icon3.png') }}" alt="product">
                            </div>
                            <div class="content">
                                <h3 class="count-title"><span class="counter">{{ $bidcount }}</span></h3>
                                <p>Total Bids</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="product-tab-menu-area mb-40-60 mt-70-100">
    <div class="container">
        <ul class="product-tab-menu nav nav-tabs">
            <li>
                <a href="#details" class="active" data-toggle="tab">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/product/tab1.png') }}" alt="product">
                    </div>
                    <div class="content">Description</div>
                </a>
            </li>
            <li>
                <a href="#delevery" data-toggle="tab">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/product/tab2.png') }}" alt="product">
                    </div>
                    <div class="content">Delivery Options</div>
                </a>
            </li>
            <li>
                <a href="#history" data-toggle="tab">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/product/tab3.png') }}" alt="product">
                    </div>
                    <div class="content">Bid History ({{ $bidcount }})</div>
                </a>
            </li>
        </ul>
    </div>
    </div>
    <div class="container">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="details">
            <div class="tab-details-content">
                <div class="header-area">
                    <h3 class="title">{{ $barangs->location }}</h3>
                    <div class="item">
                        <table class="product-info-table">
                            <tbody>
                                <tr>
                                    <th>Condition</th>
                                    <td>{{ $barangs->kondisi }}</td>
                                </tr>
                                <tr>
                                    <th>Jarak Tempuh</th>
                                    <td>{{ $barangs->jarak_tempuh }} miles</td>
                                </tr>
                                <tr>
                                    <th>Tahun</th>
                                    <td>{{ $barangs->tahun_kendaraan }}</td>
                                </tr>
                                <tr>
                                    <th>Bahan Bakar</th>
                                    <td>{{ $barangs->bahan_bakar }}</td>
                                </tr>
                                <tr>
                                    <th>Transmission</th>
                                    <td>{{ $barangs->Transmission }}</td>
                                </tr>
                                <tr>
                                    <th>Warna</th>
                                    <td>{{ $barangs->warna }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="item">
                        <ul>
                            <li>{{ $barangs->descripsi }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="delevery">
            <div class="shipping-wrapper">
                <div class="item">
                    <h5 class="title">shipping</h5>
                    <div class="table-wrapper">
                        <table class="shipping-table">
                            <thead>
                                <tr>
                                    <th>Available delivery methods </th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $barangs->deliveri }}</td>
                                    <td>{{ $barangs->ongkir }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="tab-pane fade show" id="history">
            <div class="history-wrapper">
                <div class="item">
                    <h5 class="title">Bid History</h5>
                    <div class="history-table-area">
                        <table class="history-table">
                            <thead>
                                <tr>
                                    <th>Bidder</th>
                                    <th>Date Time</th>
                                    <th>Unit price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bid as $sd)
                                <tr>
                                    <td data-history="bidder">
                                        <div class="user-info">
                                           
                                            <div class="content">
                                                {{ $sd->name }}
                                            </div>
                                        </div>
                                    </td>
                                    <td data-history="date"> {{ $sd->datetime }}</td>
                                    <td data-history="unit price"> Rp.{{ number_format($sd->jumlah_bid) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    
    <script>
        CountDownTimer('{{$barangs->id}}', 'countdown');
        function CountDownTimer(dt, id)
        {
            var end = new Date('{{$barangs->end_date}}');
            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;
            var timer;
            function showRemaining() {
                var now = new Date();
                var distance = end - now;
                if (distance < 0) {
    
                    clearInterval(timer);
                    document.getElementById(id).innerHTML = '<b>LELANG SUDAH BERAKHIR</b>';
                    window.location = "/updatedetail/"+dt+" "
                }
                var days = Math.floor(distance / _day);
                var hours = Math.floor((distance % _day) / _hour);
                var minutes = Math.floor((distance % _hour) / _minute);
                var seconds = Math.floor((distance % _minute) / _second);
    
                document.getElementById(id).innerHTML = days + 'd : ';
                document.getElementById(id).innerHTML += hours + 'h : ';
                document.getElementById(id).innerHTML += minutes + 'm : ';
                document.getElementById(id).innerHTML += seconds + 's';
                document.getElementById(id).innerHTML +='';
            }
            timer = setInterval(showRemaining, 1000);
        }
    </script>
    <!--============= Product Details Section Ends Here =============-->
@endif
@if($barangs->status == '0')
 <!--============= Product Details Section Starts Here =============-->
 <section class="product-details padding-bottom mt--240 mt-lg--440">
    <div class="container">
    <div class="product-details-slider-top-wrapper">
        <div class="product-details-slider owl-theme owl-carousel" id="sync1">
            <div class="slide-top-item">
                <div class="slide-inner">
                    <img src="{{ url('uploads') }}/{{ $barangs->gambar }}" alt="product">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-40-60-80">
        <div class="col-lg-8">
            <div class="product-details-content">
                <div class="product-details-header">
                    <h2 class="title">{{ $barangs->nama_barang }}</h2>
                    <ul>
                        <li>Item #{{ $barangs->kode_barang }}</li>
                    </ul>
                </div>
                <ul class="price-table mb-30">
                    <li class="header">
                        <h5 class="current">Open BID</h5>
                        <h3 class="price">Rp.{{ number_format($barangs->open_bid) }}</h3>
                    </li>
                    <li>
                        <span class="details">Last Bid</span>
                        <h5 class="info">Rp.{{ number_format($lastbid) }}</h5>
                    </li>
                    <li>
                        <span class="details"><b>Winners</b></span>
                        @foreach ($winnerss as $winnerss)
                        <h5 class="info"><b>{{ $winnerss->name }}</b></h5>
                        @endforeach
                    </li>
                </ul>
                <div class="product-bid-area">
                    <form action="#" method="get" class="product-bid-form">
                        {{ csrf_field() }}
                        <div class="search-icon">
                            <img src="{{ asset('assets/images/product/search-icon.png') }}" alt="product">
                        </div>
                        <input type="hidden" name="id_barang" id="id_barang" data-id="{{ $barangs->id }}" value="{{ $barangs->id }}">
                        <input type="hidden" name="nama_barang" id="nama_barang" value="{{ $barangs->nama_barang }}">
                        <input type="hidden" name="last_bid" id="last_bid" value="{{ $lastbid }}">
                        <input type="text" name="bid" id="bid" placeholder="Enter you bid amount" readonly>
                        <button type="submit" class="custom-button">Submit a bid</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-sidebar-area">
                <div class="product-single-sidebar mb-3">
                    <h6 class="title">This Auction Ends in:</h6>
                    <div class="countdown" id="countdown">
                        <div id="bid_counter1"></div>
                    </div>
                    <div class="side-counter-area">
                        <div class="side-counter-item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/product/icon3.png') }}" alt="product">
                            </div>
                            <div class="content">
                                <h3 class="count-title"><span class="counter">{{ $bidcount }}</span></h3>
                                <p>Total Bids</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="product-tab-menu-area mb-40-60 mt-70-100">
    <div class="container">
        <ul class="product-tab-menu nav nav-tabs">
            <li>
                <a href="#details" class="active" data-toggle="tab">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/product/tab1.png') }}" alt="product">
                    </div>
                    <div class="content">Description</div>
                </a>
            </li>
            <li>
                <a href="#delevery" data-toggle="tab">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/product/tab2.png') }}" alt="product">
                    </div>
                    <div class="content">Delivery Options</div>
                </a>
            </li>
            <li>
                <a href="#history" data-toggle="tab">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/product/tab3.png') }}" alt="product">
                    </div>
                    <div class="content">Bid History ({{ $bidcount }})</div>
                </a>
            </li>
        </ul>
    </div>
    </div>
    <div class="container">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="details">
            <div class="tab-details-content">
                <div class="header-area">
                    <h3 class="title">{{ $barangs->location }}</h3>
                    <div class="item">
                        <table class="product-info-table">
                            <tbody>
                                <tr>
                                    <th>Condition</th>
                                    <td>{{ $barangs->kondisi }}</td>
                                </tr>
                                <tr>
                                    <th>Jarak Tempuh</th>
                                    <td>{{ $barangs->jarak_tempuh }} miles</td>
                                </tr>
                                <tr>
                                    <th>Tahun</th>
                                    <td>{{ $barangs->tahun_kendaraan }}</td>
                                </tr>
                                <tr>
                                    <th>Bahan Bakar</th>
                                    <td>{{ $barangs->bahan_bakar }}</td>
                                </tr>
                                <tr>
                                    <th>Transmission</th>
                                    <td>{{ $barangs->Transmission }}</td>
                                </tr>
                                <tr>
                                    <th>Warna</th>
                                    <td>{{ $barangs->warna }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="item">
                        <ul>
                            <li>{{ $barangs->descripsi }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="delevery">
            <div class="shipping-wrapper">
                <div class="item">
                    <h5 class="title">shipping</h5>
                    <div class="table-wrapper">
                        <table class="shipping-table">
                            <thead>
                                <tr>
                                    <th>Available delivery methods </th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $barangs->deliveri }}</td>
                                    <td>{{ $barangs->ongkir }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="tab-pane fade show" id="history">
            <div class="history-wrapper">
                <div class="item">
                    <h5 class="title">Bid History</h5>
                    <div class="history-table-area">
                        <table class="history-table">
                            <thead>
                                <tr>
                                    <th>Bidder</th>
                                    <th>Date Time</th>
                                    <th>Unit price</th>
                                    <th>Winners</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bid as $sd)
                                <tr>
                                    <td data-history="bidder">
                                        <div class="user-info">
                                            <div class="content">
                                                {{ $sd->name }}
                                            </div>
                                        </div>
                                    </td>
                                    <td data-history="date"> {{ $sd->datetime }}</td>
                                    <td data-history="unit price"> Rp.{{ number_format($sd->jumlah_bid) }}</td>
                                    <td data-history="winners"> <i class="fas fa-{{ ($sd->winners == 1) ? 'crown' : '' }} fa-2x " style="color:gold"></i></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    <script>
        CountDownTimer('{{$barangs->id}}', 'countdown');
        function CountDownTimer(dt, id)
        {
            var end = new Date('{{$barangs->end_date}}');
            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;
            var timer;
            function showRemaining() {
                var now = new Date();
                var distance = end - now;
                if (distance < 0) {
    
                    clearInterval(timer);
                    document.getElementById(id).innerHTML = '<b>LELANG SUDAH BERAKHIR</b>';
                   return;
                }
                var days = Math.floor(distance / _day);
                var hours = Math.floor((distance % _day) / _hour);
                var minutes = Math.floor((distance % _hour) / _minute);
                var seconds = Math.floor((distance % _minute) / _second);
    
                document.getElementById(id).innerHTML = days + 'd : ';
                document.getElementById(id).innerHTML += hours + 'h : ';
                document.getElementById(id).innerHTML += minutes + 'm : ';
                document.getElementById(id).innerHTML += seconds + 's';
                document.getElementById(id).innerHTML +='';
            }
            timer = setInterval(showRemaining, 1000);
        }
    </script>
@endif
@endsection