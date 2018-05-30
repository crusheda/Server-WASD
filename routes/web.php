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
    return view('pages.user.track');
})->name('track');

Route::post('/track', 'OrderController@track');

// Route::get('/admin', function () {
//     return view('page.admin.dashboard');
// });
Route::middleware('auth')->group(function (){
        # code...
    //Function GET
    Route::get('/admin', 'admin\DashboardController@index')->name('dashboard');
    Route::get('/admin/order', 'OrderController@index')->name('tambahorder');
    Route::get('/logout', 'admin\DashboardController@logout')->name('logout');
    // Route::get('/order', 'OrderController@detail');

    // Function POST
    Route::post('/order', 'OrderController@store');
    Route::post('/admin/login', 'LoginAdminController@index');
    Route::post('/', 'OrderController@detail');

    Route::post('/ambil', 'OrderController@done');
});

Route::get('/admin/login', function (){
    return view('pages.admin.login');
})->name('adminlogin');

// Route::get('/order', function () {
//     return view('pages.user.order');
// });

Route::get('/contact', function () {
    return view('pages.user.contact');
})->name('contact');

// Start Login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Stop Login
