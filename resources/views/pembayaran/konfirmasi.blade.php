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
                <span>Konfirmasi Pembayaran</span>
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
                <h5 class="title mb-10">Konfirmasi Pembayaran</h5>
                <div class="dashboard-purchasing-tabs">
                    <ul class="nav-tabs nav">
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active fade" id="current">
                            <table class="purchasing-table">
                                <thead>
                                    <th>Name</th>
                                       <th>Nama Barang</th>
                                        <th>Total Pembayaran</th>
                                        <th>Metode</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ( $pembayaran as $pembayaran)
                                    <tr>
                                      <td>{{ $pembayaran->name }}</td>
                                      <td>{{ $pembayaran->nama_barang }}</td>
                                      <td>Rp.{{ $pembayaran->total_pembayaran }}</td>
                                      <td>{{ $pembayaran->metode }}</td>
                                      @if ($pembayaran->status == 'proses')
                                      <td> <a class="btn btn-info btn-sm" href="#">
                                     Proses
                                    </a></td>
                                      @endif
                                      @if ($pembayaran->status == 'berhasil')
                                      <td> <a class="btn btn-success btn-sm" href="#">
                                     Berhasil
                                    </a></td>
                                      @endif
                                         <td><a class="btn btn-primary btn-sm" href="/konfrimsuccess/{{ $pembayaran->id_barang }}">
                                            Konfrimasi
                                                  </a></td>
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
</section>
<!--============= Dashboard Section Ends Here =============-->

@endsection