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
                <span>Lelang Update</span>
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
                    <h5 class="title mb-10">Lelang Update</h5>
                    <div class="dashboard-purchasing-tabs">
                        <ul class="nav-tabs nav">
                        </ul>
                            <form action="{{route('successupdatelelang')}}" method="post" nctype="multipart/form-data">
                                {{ csrf_field() }}
                                @foreach($barangs as $qs)
                                <input type="hidden" name="id" id="id" value="{{ $qs->id }}">
                                <input type="hidden" name="name" id="name" value="{{ Auth::user()->name }}">
                                <input type="hidden" name="status" id="status" value="{{ $qs->status }}">
                                <div class="form-group">
                                    <label for="inputName">Kode Barang</label>
                                    <input type="text" name="kode_barang" id="kode_barang" value="{{ $qs->kode_barang }}" class="form-control" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputName">Nama Barang</label>
                                    <input type="text" name="nama_barang" id="nama_barang" value="{{ $qs->nama_barang }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                    <img id="preview_img" class="d-block">
                                  </br>
                                      <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar" onchange="loadPreview(this);">
                                        <label class="custom-file-label" for="exampleInputFile">Upload File</label>
                                        
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputName">Open BID</label>
                                    <input name="open_bid" type="text" id="open_bid" value="{{ $qs->open_bid }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputClientCompany">Desctipsi</label>
                                    <input name="descripsi" type="text" id="descripsi" value="{{ $qs->descripsi }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputProjectLeader">Location</label>
                                    <input name="location" type="text" id="location" value="{{ $qs->location }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEstimatedDuration">Kondisi</label>
                                    <input type="text" name="kondisi" id="kondisi" value="{{ $qs->kondisi }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEstimatedDuration">Tahun Kendaraan</label>
                                    <input type="text" name="tahun_kendaraan" id="tahun_kendaraan" value="{{ $qs->tahun_kendaraan }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEstimatedDuration">Warna</label>
                                    <input type="text" name="warna" id="warna" value="{{ $qs->warna }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEstimatedDuration">Transmission</label>
                                    <input type="text" name="Transmission" id="Transmission" value="{{ $qs->Transmission }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEstimatedDuration">Jarak Tempuh</label>
                                    <input type="text" name="jarak_tempuh" id="jarak_tempuh" value="{{ $qs->jarak_tempuh }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEstimatedDuration">Bahan Bakar</label>
                                    <input type="text" name="bahan_bakar" id="bahan_bakar" value="{{ $qs->bahan_bakar }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEstimatedDuration">End date</label>
                                    <input type="date" name="end_date" id="end_date" value="{{ $qs->end_date }}" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputStatus">Deliveri</label>
                                    <select name="deliveri" id="deliveri" class="form-control custom-select">
                                        @foreach ($deliveri as $sfs)
                                      <option value="{{ $sfs->jasa_pengirim }}">{{ $sfs->jasa_pengirim }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                              <div class="form-group">
                                <label for="inputSpentBudget">Ongkir</label>
                                <input type="text" name="ongkir" id="ongkir" value="{{ $qs->ongkir }}" class="form-control">
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                                                            @endforeach
                                                          </form>
                                            </div>
</section>
<!--============= Dashboard Section Ends Here =============-->
<script>
    function loadPreview(input, id) {
      id = id || '#preview_img';
      if (input.files && input.files[0]) {
          var reader = new FileReader();
   
          reader.onload = function (e) {
              $(id)
                      .attr('src', e.target.result)
                      .width(400)
                      .height(200);
          };
   
          reader.readAsDataURL(input.files[0]);
      }
   }
  </script>
 
@endsection