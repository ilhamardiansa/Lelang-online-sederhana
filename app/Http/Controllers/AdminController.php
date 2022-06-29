<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->count();
        $barangs = DB::table('barangs')->count();
        $bid = DB::table('bid')->count();
        $bids = DB::table('bid')->where('name', Auth::user()->name)->get();
        return view('admin.index', compact('users','barangs','bid', 'bids'));
    }
}
