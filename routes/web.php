<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::group(['middleware' => ['auth','ceklevel:admin,pelelang,bidders']], function (){

 //test email
 Route::get('/emailbid', [App\Http\Controllers\EmailbidController::class, 'bid'])->name('emailbid');

    //Route Forgot Password
Route::get('/password-reset', [App\Http\Controllers\BidController::class, 'index'])->name('passreset');

    //Route Halaman Awal
Route::get('/detail/{id}', [App\Http\Controllers\BidController::class, 'index'])->name('detail');
Route::get('/updatedetail/{id}', [App\Http\Controllers\BidController::class, 'update'])->name('updatedetail');

    //Route Bid
Route::post('/addbid', [App\Http\Controllers\BidController::class, 'store'])->name('addbid');

//Route personal profile
Route::get('/personalprofile', [App\Http\Controllers\ProfileController::class, 'index'])->name('personalprofile');
Route::get('/editprofile/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('editprofile');
Route::post('/successprofile', [App\Http\Controllers\ProfileController::class, 'update'])->name('successprofile');

//Route Winnier Bids
Route::get('/winners', [App\Http\Controllers\WinnersController::class, 'index'])->name('winners');

//Route dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//Route Halaman Users Controll (ADMIN)
Route::get('/userscontroll', [App\Http\Controllers\UserController::class, 'index'])->name('userscontroll');
Route::get('/userupdate/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('userupdate');
Route::get('/deleteuser/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('deleteuser');
Route::get('/adduser', [App\Http\Controllers\UserController::class, 'create'])->name('adduser');
Route::post('/successadd', [App\Http\Controllers\UserController::class, 'store'])->name('successadd');
Route::post('/successuser', [App\Http\Controllers\UserController::class, 'update'])->name('successuser');

//Route Halaman Controll Lelang
Route::get('/lelangcontroll', [App\Http\Controllers\BarangController::class, 'index'])->name('lelangcontroll');
Route::get('/lelangupdate/{id}', [App\Http\Controllers\BarangController::class, 'edit'])->name('lelangupdate');
Route::get('/lelangdelete/{id}', [App\Http\Controllers\BarangController::class, 'destroy'])->name('lelangdelete');
Route::get('/addlelang', [App\Http\Controllers\BarangController::class, 'create'])->name('addlelang');
Route::post('/successaddlelang', [App\Http\Controllers\BarangController::class, 'store'])->name('successaddlelang');
Route::post('/successupdatelelang', [App\Http\Controllers\BarangController::class, 'update'])->name('successupdatelelang');

//Route Website Controll
Route::get('/website', [App\Http\Controllers\PanelController::class, 'index'])->name('website');
Route::post('/updatepanel', [App\Http\Controllers\PanelController::class, 'store'])->name('updatepanel');

//Route Upgrade Bidders To Pelelang
Route::get('/upgrade', [App\Http\Controllers\AkunController::class, 'index'])->name('upgradeacc');
Route::get('/successupgrade/{id}', [App\Http\Controllers\AkunController::class, 'update'])->name('successupgrade');

});

//Route Halaman Awal
Route::get('/lelang', [App\Http\Controllers\BerandaController::class, 'index'])->name('lelang');
Route::get('/lelang/cari', [App\Http\Controllers\BerandaController::class, 'search'])->name('lelangcari');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route Pembayaran
Route::get('/payment/{id}', [App\Http\Controllers\PembayaranController::class, 'index'])->name('payment');
Route::post('/prosespayment', [App\Http\Controllers\PembayaranController::class, 'store'])->name('prosespayment');
Route::get('/konfirmasipayment', [App\Http\Controllers\KonfrimasiPembayaranController::class, 'index'])->name('konfirmasipayment');
Route::get('/konfrimsuccess/{id}', [App\Http\Controllers\KonfrimasiPembayaranController::class, 'update'])->name('konfrimsuccess');


