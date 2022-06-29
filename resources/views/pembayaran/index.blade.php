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
                <span>Pembayaran</span>
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
                    <h5 class="title mb-10">Pembayaran</h5>
                    <div class="dashboard-purchasing-tabs">
                        <ul class="nav-tabs nav">
                        </ul>
                            <form action="{{route('prosespayment')}}" method="post">
                                {{ csrf_field() }}
                                @foreach ($total as $totals)
                                <input type="hidden" name="id_barang" id="id_barang" value="{{ $totals->id_barang }}"> 
                                <input type="hidden" name="nama_barang" id="nama_barang" value="{{ $totals->nama_barang }}"> 
                                @endforeach
                                                  <div class="form-group">
                                                      <label for="exampleSelectRounded0">Metode Pembayaran</label>
                                                      <select class="custom-select rounded-0" name="metode" id="metode">
                                                        <option selected>Choose Bank</option>
                                                          @foreach ($metode as $metode)
                                                          <option value1="{{ $metode->id }}" value2="{{ $metode->norek }}" value3="{{ $metode->atasnama }}">{{ $metode->nama_bank }}</option>
                                                          @endforeach
                                                      </select>
                                                    </div>
                                                        <input class="alert alert-success" type="text" name="alert" id="alert" readonly> 
                                                        <p><small>* Jika Sudah Melakukan Pembayaran Silakan Klik Sudah Transfer</small></p>
                                                  <div class="form-group">
                                                    <label for="exampleInputPassword1">Total</label>
                                                    @foreach ($total as $total)
                                                    <input type="text" class="form-control" name="total_pembayaran" id="total_pembayaran" value="{{ number_format($total->jumlah_bid) }}" readonly>
                                                    @endforeach
                                                  </div>
                                              <button type="submit" class="btn btn-primary" >Sudah Transfer</button>
                                            </div>
                                          </form>
                            </div>
</section>
<!--============= Dashboard Section Ends Here =============-->
<script>
     $('#metode').on('change', function() {
    var val = $(this).find('option:selected').attr('value1');
    var val2 = $(this).find('option:selected').attr('value2');
    var val3 = $(this).find('option:selected').attr('value3');
    document.getElementById('alert').value =  'No Rekening : '+ val2 + '  Atas Nama : '+ val3;
});
        </script>
@endsection