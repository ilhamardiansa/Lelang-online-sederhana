<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    
    public function index()
    {
        $barangs = DB::table('barangs')->where('status', '1')->paginate(5);
        $logo = DB::table('panel')->get();
        return view('halaman.products', compact('barangs', 'logo'));
    }

    public function search(Request $request)
    {
        $cari = $request->name;
        $cari2 = $request->status;
        $barangs = DB::table('barangs')->where('status', 'like',"%".$cari2."%")
        ->where('nama_barang', 'like',"%".$cari."%")
        ->paginate(5);
        $logo = DB::table('panel')->get();
        return view('halaman.products', compact('barangs', 'logo'));
    }
}
