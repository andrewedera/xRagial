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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/vendor/{vend}', 'VendController@showVendor')->middleware('throttle:50:1'); //throttle 50 request per minute
Route::get('/', 'VendController@index');
Route::match(['post','get'],'/search', 'VendController@search')->middleware('throttle:60:1'); //throttle 60 request per minute