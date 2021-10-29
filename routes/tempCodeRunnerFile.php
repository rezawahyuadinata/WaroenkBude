<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Use App\Barang;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
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

Auth::routes();

//utama
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function() {
    return view('home.utama');
});
Route::get('/menu', function() {
    $barangs1 = DB::table('barangs')->whereIn('jenis', ['0'])->get();

    $barangs2 = DB::table('barangs')->whereIn('jenis', ['1'])->get();

    return view('home.menu', compact('barangs1','barangs2'));
});

Route::get('/pesan/{id}','PesanController@index');
Route::post('/pesan/{id}','PesanController@pesan');

Route::get('/promo', function() {
    return view('home.promo');
});
Route::get('/contact', function() {
    return view('home.contact');
});

//user
Route::get('/cart','PesanController@check_out');
Route::delete('/cart/{id}','PesanController@delete');
Route::get('/konfirmasi-cart','PesanController@konfirmasi');

Route::get('/profile/riwayat', function () {
    return view('user.riwayat');
});

Route::get('/profile/cart', function () {
    return view('user.cart');
});


route::prefix('profile')->group(function(){
    Route::get('/setting','ProfileController@profile');
    Route::post('/setting','ProfileController@update');
    Route::get('/', function () {
        return view('user.dashboard');
    });
    Route::get('/cart','ProfileController@check_out');
    Route::delete('/cart/{id}','ProfileController@delete');
    Route::get('/konfirmasi-cart','ProfileController@konfirmasi');
    Route::get('/riwayat','ProfileController@history');
    Route::get('/riwayat/{id}','ProfileController@historydetail');


});
//admin
// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
});