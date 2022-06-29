<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserControl;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = DB::table('panel')->get();
    	$users = DB::table('users')->get();
    	return view('dashboard.user', compact('users', 'logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	
        $logo = DB::table('panel')->get();
    	return view('dashboard.adduser', compact('logo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB::table('users')->insert([
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('userscontroll')->with('success', 'Data berhasil ditambah');
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
	$users = DB::table('users')->where('id',$id)->get();
	return view('dashboard.userupdate', compact('users', 'logo'));
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
	DB::table('users')->where('id',$request->id)->update([
        'name' => $request->name,
        'level' => $request->level,
        'email' => $request->email,
        'password' => Hash::make($request->password)
	]);
	return redirect('userscontroll')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	DB::table('users')->where('id',$id)->delete();
	return redirect('/userscontroll')->with('success', 'Data berhasil dihapus');
    }
}
