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
                <span>List Lelang</span>
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
    </div>
</div>
            <div class="col-20">
                <div class="dashboard-widget">
                    <h5 class="title mb-10">List Lelang</h5>
                    <div class="dashboard-purchasing-tabs">
                        <div class="tab-content">
                            <div class="table-responsive-lg">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>Nama Barang</th>
                                    @if(Auth::user()->level == 'admin')
                                    <th>Pelelang</th>
                                    @endif
                                    <th>Gambar</th>
                                    <th>Open BID</th>
                                    <th>Descripsi</th>
                                    <th>Location</th>
                                    <th>Deliveri</th>
                                    <th>Ongkir</th>
                                    <th>Kondisi</th>
                                    <th>Tahun Kendaraan</th>
                                    <th>Warna</th>
                                    <th>Transmission</th>
                                    <th>Jarak Tempuh</th>
                                    <th>Bahan Bakar</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @if(Auth::user()->level == 'admin')
                                    @foreach($barangss as $pss)
                                    <tr>
                                      <td>{{ $pss->nama_barang }}</td>
                                      <td>{{ $pss->name }}</td>
                                      <td> <img src="{{ url('uploads') }}/{{ $pss->gambar }}" width="100" height="50"></td>
                                      <td>Rp.{{ number_format($pss->open_bid) }}</td>
                                      <td>{{ $pss->descripsi }}</td>
                                      <td>{{ $pss->location }}</td>
                                      <td>{{ $pss->deliveri }}</td>
                                      <td>{{ $pss->ongkir }}</td>
                                      <td>{{ $pss->kondisi }}</td>
                                      <td>{{ $pss->tahun_kendaraan }}</td>
                                      <td>{{ $pss->warna }}</td>
                                      <td>{{ $pss->Transmission }}</td>
                                      <td>{{ number_format($pss->jarak_tempuh) }}</td>
                                      <td>{{ $pss->bahan_bakar }}</td>
                                      <td>{{ $pss->end_date }}</td>
                                      <td><label class="btn btn-block btn-{{ ($pss->status == 1) ? 'success' : 'danger' }}">{{ ($pss->status == 1) ? 'Aktif' : 'Berakhir' }}</label></td>
                                      <td class="project-actions text-right">
                                        <a href="/lelangupdate/{{ $pss->id }}" span class="edit"><i class="flaticon-edit"></i> Edit</a>
                                        <a href="/lelangdelete/{{ $pss->id }}" span class="edit"><i class="fa fa-trash"></i> Delete</a>
                                      </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    @if(Auth::user()->level == 'pelelang' | Auth::user()->level == 'bidders')
                                    @foreach($barangs as $ps)
                                    <tr>
                                      <td>{{ $ps->nama_barang }}</td>
                                      <td> <img src="{{ url('uploads') }}/{{ $ps->gambar }}" width="100" height="50"></td>
                                      <td>Rp.{{ number_format($ps->open_bid) }}</td>
                                      <td>{{ $ps->descripsi }}</td>
                                      <td>{{ $ps->location }}</td>
                                      <td>{{ $ps->deliveri }}</td>
                                      <td>{{ $ps->ongkir }}</td>
                                      <td>{{ $ps->kondisi }}</td>
                                      <td>{{ $ps->tahun_kendaraan }}</td>
                                      <td>{{ $ps->warna }}</td>
                                      <td>{{ $ps->Transmission }}</td>
                                      <td>{{ number_format($ps->jarak_tempuh) }}</td>
                                      <td>{{ $ps->bahan_bakar }}</td>
                                      <td>{{ $ps->end_date }}</td>
                                      <td><label class="btn btn-block btn-{{ ($ps->status == 1) ? 'success' : 'danger' }}">{{ ($ps->status == 1) ? 'Aktif' : 'Berakhir' }}</label></td>
                                      <td class="project-actions text-right">
                                        <a href="/lelangupdate/{{ $ps->id }}" span class="edit"><i class="flaticon-edit"></i> Edit</a>
                                        <a href="/lelangdelete/{{ $ps->id }}" span class="edit"><i class="fa fa-trash"></i> Delete</a>
                                      </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                              </table>
                                    {{ $barangs->links('pagination::bootstrap-4') }}
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