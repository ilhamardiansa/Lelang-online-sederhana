<?php

namespace App\Http\Controllers;

use App\Mail\email;
use App\Notifications\bid;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmailbidController extends Controller
{
    public function bid ()
    {
        $barang = DB::table('barangs')->where('id', '14')->first();
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
    }
}
