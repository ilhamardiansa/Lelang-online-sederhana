<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Mail\email;
use App\Notifications\bid;
use App\Models\User;

class KonfrimasiPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = DB::table('pembayaran')->get();
        $logo = DB::table('panel')->get();
      return view('pembayaran.konfirmasi', compact('logo','pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        DB::table('pembayaran')
        ->where('id_barang', $id)
        ->update([
            'status' => 'berhasil'
        ]);

        DB::table('bid')
        ->where('winners', '1')
        ->where('id_barang', $id)
        ->update([
            'pembayaran' => 'berhasil'
        ]);
        
        $bid = DB::table('bid')
        ->where('winners', '1')
        ->where('pembayaran', 'berhasil')
        ->where('id_barang', $id)
        ->first();
       $user = User::where('name', $bid->name)->first();
       $data = [
           'line1' => 'Pembayaran Anda Telah DiKonfrimasi',
           'line2' => 'Silakan Chat Pelelang Untuk Konfrimasi Pengiriman',
           'line3' => ''
       ];

       $user->notify(new bid($data));
       return redirect('konfirmasipayment')->with('success', 'Pembayaran Berhasil DiKonfirmasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
