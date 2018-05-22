<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/bahan', 'OrderController@updateBahan');
Route::post('/potong', 'OrderController@updatePotong');
Route::post('/sablon', 'OrderController@updateSablon');
Route::post('/jahit', 'OrderController@updateJahit');
Route::post('/press', 'OrderController@updatePress');
Route::post('/finishing', 'OrderController@updateFinish');
Route::post('/quality_control', 'OrderController@updateQc');
Route::post('/konfirmasi', 'OrderController@updateKonfirmasi');