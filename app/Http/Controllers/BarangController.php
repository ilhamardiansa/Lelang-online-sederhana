<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = DB::table('panel')->get();
        $barangs = DB::table('barangs')->where('name', Auth::user()->name)->paginate(5);
        $barangss = DB::table('barangs')->paginate(5);
    	return view('dashboard.lelang', compact('barangs', 'logo', 'barangss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo = DB::table('panel')->get();
        $deliveri = DB::table('deliveri')->get();
        $kode = Barang::kode();
	return view('dashboard.addlelang', compact('deliveri', 'kode', 'logo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'name' => 'required',
            'nama_barang' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'open_bid' =>'required',
            'last_bid' =>'required',
            'descripsi' => 'required',
            'location' => 'required',
            'deliveri' => 'required',
            'ongkir' => 'required',
            'kondisi' => 'required',
            'tahun_kendaraan' => 'required',
            'warna' => 'required',
            'Transmission' => 'required',
            'jarak_tempuh' => 'required',
            'bahan_bakar' => 'required',
            'end_date' =>'required',
            'status' => 'required',
        ]);
  
        $input = $request->except(['_token']);
  
        if ($image = $request->file('gambar')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        $barangs = DB::table('barangs')->insert($input);
     
        return redirect()->route('lelangcontroll')->with('success', 'Data berhasil ditambah');
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
        $logo = DB::table('panel')->get();
        $barangs = DB::table('barangs')->where('id',$id)->get();
        $deliveri = DB::table('deliveri')->get();
		return view('dashboard.lelangupdate', compact('barangs', 'deliveri', 'logo'));
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
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'open_bid' =>'required',
            'descripsi' => 'required',
            'location' => 'required',
            'deliveri' => 'required',
            'ongkir' => 'required',
            'kondisi' => 'required',
            'tahun_kendaraan' => 'required',
            'warna' => 'required',
            'Transmission' => 'required',
            'jarak_tempuh' => 'required',
            'bahan_bakar' => 'required',
            'end_date' =>'required',
            'status' => 'required'
        ]);
        
        $input = $request->except(['_token']);
        
        if ($image = $request->file('gambar')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }else{
            unset($input['gambar']);
        }
        
        $barangs = DB::table('barangs')->where('id', $request->id)->update($input);
        
        return redirect()->route('lelangcontroll')->with('success', 'Data berhasil diubah');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barangs')->where('id',$id)->delete();
	return redirect('/lelangcontroll')->with('success', 'Data berhasil dihapus');
    }
}
