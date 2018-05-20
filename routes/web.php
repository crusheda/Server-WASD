<?php

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
    return view('pages.user.home');
});

Route::get('/admin', 'admin\DashboardController@index')->name('dashboard');
Route::get('/admin/order', 'admin\OrderController@index')->name('order');
Route::get('/admin/transaksi', 'admin\LaporanTransaksiController@index')->name('transaksi');
Route::get('/admin/laporan', 'admin\LaporanPesananController@index')->name('laporan');
Route::resource('admin/jenis_barang', 'admin\JenisBarangController');
Route::resource('admin/barang', 'admin\BarangController');

Route::get('/admin/login', function (){
    return view('pages.admin.login');
})->name('adminlogin');

Route::post('/loginadmin', 'LoginAdminController@index');
Route::post('/transaksi', 'TransaksiController@store');
Route::post('/transaksi/update/{id}', 'TransaksiController@update');
Route::post('/download/{transaksi}', 'DownloadController@index');

// Route::get('/admin', function () {
//     return view('pages.dashboard');
// })->name('dashboard');

Route::get('/home', function () {
    return view('pages.user.home');
})->name('home');

Route::get('/home2', function () {
    return view('pages.user.home2');
})->name('home');

Route::get('/cart', function () {
    return view('pages.user.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('pages.user.checkout');
})->name('checkout');

Route::get('/register', function () {
    return view('pages.user.register');
})->name('register');

Route::get('/product', function () {
    return view('pages.user.product');
})->name('product');

Route::get('/productdetail', function () {
    return view('pages.user.productdetail');
})->name('productdetail');

Route::get('/contact', function () {
    return view('pages.user.contact');
})->name('contact');
