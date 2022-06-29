<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Mail\email;
use App\Notifications\bid;
use App\Models\User;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $barangs = Barang::where('id', $id)->first();
        $bid = DB::table('bid')->where('id_barang', $id)->orderBy('jumlah_bid', 'desc')->get();
        $bidcount = DB::table('bid')->where('id_barang', $id)->count();
        $lastbid = DB::table('bid')->where('id_barang', $id)->max('jumlah_bid');

        $winnerss = DB::table('bid')->where('id_barang', $id)
        ->where('winners','1 ')
        ->get();
        
        Session::put('halaman_url', request()->fullUrl());
        $logo = DB::table('panel')->get();
        return view ('halaman.detail', compact('barangs','bid','bidcount','lastbid', 'logo', 'winnerss'));
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
        
        DB::table('bid')->insert([
            'name' => Auth::user()->name,
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'jumlah_bid' => $request->bid,
            'winners' => '0',
            'pembayaran' => '0'
        ]);

        return redirect(session('halaman_url'))->with('success', 'Berhasil memasang bids');
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
    public function update(Request $request)
    {
        $lastbid = DB::table('bid')->where('id_barang', $request->id)->max('jumlah_bid');
        $barangs =  DB::table('barangs')->where('id',$request->id)->update([
            'status' => 0,
            'last_bid' => $lastbid
        ]);
        $bid =  DB::table('bid')->where('id_barang', $request->id)
        ->where('jumlah_bid',$lastbid)
        ->update([
            'winners' => 1,
            'pembayaran' => 'belum dibayar'
        ]);

        $barang = DB::table('barangs')->where('id', $request->id)->first();
        $bid = DB::table('bid')
        ->where('winners', '1')
        ->where('id_barang', $barang->id)
        ->first();
       $user = User::where('name', $bid->name)->first();
       $data = [
           'line1' => 'Anda Telah Memenangkan Bids',
           'line2' => 'Segera Cek Dan Lakukan Pembayaran',
           'line3' => 'Batas Pembayaran 24 Jam Dari Email Terkirim'
       ];

       $user->notify(new bid($data));

        return redirect(session('halaman_url'))->with('info', 'Lelang Telah Berakhir');
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
