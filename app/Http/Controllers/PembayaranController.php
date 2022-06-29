<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\email;
use App\Notifications\bid;
use App\Models\User;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $total = DB::table('bid')
        ->where('id_barang', $id)
        ->where('winners', '1')
        ->get();
        $metode = DB::table('metode_pembayaran')->get();
        $logo = DB::table('panel')->get();
      return view('pembayaran.index', compact('logo','metode', 'total'));
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
        DB::table('pembayaran')->insert([
            'name' => Auth::user()->name,
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'total_pembayaran' => $request->total_pembayaran,
            'metode' => $request->metode,
            'status' => 'proses',
        ]);

        $bid =  DB::table('bid')
        ->where('id_barang', $request->id_barang)
        ->where('winners', '1')
        ->update([
            'pembayaran' => 'proses'
        ]);

        $bidss = DB::table('bid')
        ->where('winners', '1')
        ->where('id_barang', $request->id_barang)
        ->where('pembayaran', 'proses')
        ->first();

       $user = User::where('name', $bidss->name)->first();
       $data = [
        'line1' => 'Pembayaran Anda Sedang Di Proses',
        'line2' => 'Memakan Waktu 1x24 Jam',
        'line3' => 'Jika Tidak Ada Notifikasi Pembayaran Segera Kontak Costumer Service'
       ];

       $user->notify(new bid($data));
        return redirect('winners')->with('success', 'Pembayaran Sedang Di Proses');
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
    public function update(Request $request, $id)
    {
        //
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
