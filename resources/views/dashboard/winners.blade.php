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
                <span>Winners Bids</span>
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
                    <h5 class="title mb-10">Winners Bids</h5>
                    <div class="dashboard-purchasing-tabs">
                        <ul class="nav-tabs nav">
                        </ul>
                        <small><b>*Untuk Melakukan Pembayaran Klik Bayar</b></small>
                        <div class="tab-content">
                            <div class="tab-pane show active fade" id="current">
                                <table class="purchasing-table">
                                    <thead>
                                        <th>Name</th>
                                           <th>Nama Barang</th>
                                            <th>Jumlah Bid</th>
                                            <th>Status</th>
                                            <th>Pembayaran</th>
                                            <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($winners as $sdss)
                                        <tr>
                                            <td>{{ $sdss->name }}</td>
                      <td>{{ $sdss->nama_barang }}</td>
                      <td>Rp.{{ number_format($sdss->jumlah_bid) }}</td>
                      <td><i class="fas fa-{{ ($sdss->winners == 1) ? 'crown' : '' }} fa-2x " style="color:gold"></i></td>
                      @if ($sdss->pembayaran == 'belum dibayar')
                      <td><a class="btn btn-warning btn-sm" href="/payment/{{ $sdss->id_barang }}">
                   Bayar 
                    </a></td>
                      @endif
                      @if ($sdss->pembayaran == 'proses')
                      <td> <a class="btn btn-info btn-sm" href="#">
                     Proses
                    </a></td>
                      @endif
                      @if ($sdss->pembayaran == 'berhasil')
                      <td> <a class="btn btn-success btn-sm" href="#">
                     Berhasil
                    </a></td>
                      @endif
                      <td> <a class="btn btn-info btn-sm" href="/detail/{{ $sdss->id_barang }}">
                        <i class="fas fa-eye">
                        </i>
                     View
                    </a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                    {{ $winners->links('pagination::bootstrap-4') }}
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