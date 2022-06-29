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
        <span>Lelang
        </span>
    </li>
</ul>
</div>
<div class="bg_img hero-bg bottom_center" data-background="{{ asset('assets/images/banner/hero-bg.png') }}"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Featured Auction Section Starts Here =============-->
<section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
<div class="container">
<div class="section-header cl-white mw-100 left-style">
    <h3 class="title">Tawar Lelang Unggulan Ini! </h3>
</div>

<!--============= Product Auction Section Starts Here =============-->

<div class="product-auction padding-bottom">
    <div class="container">
        <form  action="/lelang/cari" method="GET">
                <div class="product-header mb-40" style="background-color:rgb(252, 250, 247);">
                    <div class="product-header-item">
                        <div class="item">Sort By : </div>
                        <select name="status" class="select-bar">
                            <option value="1">Belum Berakhir</option>
                            <option value="0">Berakhir</option>
                        </select>
                    </div>
                        <div  class="product-search ml-auto">
                        <input type="text" name="name" placeholder="Item Name..." value="{{ old('cari') }}">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        <div class="row mb-30-none justify-content-center">
                @foreach ($barangs as $barang)
                    <div class="col-sm-10 col-md-8 col-lg-5">
                        <div class="auction-item-2">
                            <div class="auction-thumb">
                                <a href="{{ url('detail') }}/{{ $barang->id }}"><img src="{{ url('uploads') }}/{{ $barang->gambar }}" alt="product"></a>
                                <a href="{{ url('detail') }}/{{ $barang->id }}" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="{{ url('detail') }}/{{ $barang->id }}">{{ $barang->nama_barang }}</a>
                                </h6>
                                <div class="bid-area">
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Last BID</div>
                                            <div class="amount">Rp.{{ number_format($barang->open_bid) }}</div>
                                        </div>
                                    </div>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Open BID</div>
                                            <div class="amount">Rp.{{ number_format($barang->open_bid) }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countdown-area">
                                </div>
                                <div class="text-center">
                                    <a href="{{ url('detail') }}/{{ $barang->id }}" class="custom-button">Submit a bid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $barangs->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection