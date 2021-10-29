<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\PemilikController;

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
Route::get('/test', function() {
    return view('test');
});
//utama
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'UtamaController@index');
Route::get('/menu', 'UtamaController@menu');
Route::get('/pesan/{id}','PesanController@index');
Route::post('/pesan/{id}','PesanController@pesan');
Route::get('/paket','UtamaController@paket' );
Route::get('/paket/{id}','PesanController@paketindex');
Route::post('/paket/{id}','PesanController@paketpesan');
Route::get('/contact', 'UtamaController@kontak');
Route::post('/contact', 'UtamaController@kontakkirim');


//user
Route::get('/cart','PesanController@check_out');
Route::delete('/cart/{id}','PesanController@delete');
Route::get('/konfirmasi-cart','PesanController@konfirmasi');
route::prefix('profile')->group(function(){
    Route::get('/setting','ProfileController@profile');
    Route::post('/setting','ProfileController@update');
    Route::get('/index', 'ProfileController@index');
    Route::get('/cart','ProfileController@check_out');
    Route::delete('/cart/{id}','ProfileController@delete');
    Route::get('/konfirmasi-cart','ProfileController@konfirmasi');
    Route::get('/riwayat','ProfileController@history');
    Route::get('/riwayat/{id}','ProfileController@historydetail');
    Route::delete('/riwayat/{id}','ProfileController@deletedetail');
    Route::get('/invoice/{id}','ProfileController@invoice');
});

// Admin routes
Route::prefix('admin')->group(function(){
    //auth
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    //home
        //dashboard
    Route::get('/', 'PemilikController@index')->name('admin.dashboard');
        //pelanggan
    Route::get('/pelanggan', 'PemilikController@pelanggan');
    Route::delete('/pelanggan/{id}','PemilikController@pelanggandelete');
        //pemesanan
    Route::get('/pesanan', 'PemilikController@penjualan');
    Route::delete('pesanan/{id}','PemilikController@penjualandelete')->name('admin.pesananhapus');
    Route::get('/pesanan/{id}','PemilikController@penjualandetail');
    Route::post('/pesananubah/{id}','PemilikController@penjualanupdate')->name('admin.pesananubah');
    Route::get('/invoice/{id}','PemilikController@invoice');
    Route::get('/invoice/print/{id}', 'PemilikController@print');
    //barang
    Route::get('/barang', 'PemilikController@barang');
    Route::get('/barangbuat','PemilikController@barangbuat');
    Route::post('/barangbuatkirim','PemilikController@barangbuatkirim')->name('admin.barangbuatkirim');
    Route::delete('/barang/{id}', 'PemilikController@barangdelete');
    Route::get('/barangupdate/{id}', 'PemilikController@barangupdate')->name('admin.barangupdate');
    Route::post('/barangupdate/{id}', 'PemilikController@barangupdatekirim');
        //berita
    Route::get('/berita', 'PemilikController@berita');
    Route::get('/beritabuat','PemilikController@beritabuat');
    Route::post('/beritabuatkirim','PemilikController@beritabuatkirim')->name('admin.beritabuatkirim');
    Route::delete('/berita/{id}', 'PemilikController@beritadelete');
    Route::get('/beritaupdate/{id}', 'PemilikController@beritaupdate')->name('admin.beritaupdate');
    Route::post('/beritaupdate/{id}', 'PemilikController@beritaupdatekirim');
});
