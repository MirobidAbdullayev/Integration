<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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
    return view('welcome');
});

Route::get('payment', 'App\Http\Controllers\PaymentController@index');

Route::post('charge', 'App\Http\Controllers\PaymentController@charge');

Route::get('success', 'App\Http\Controllers\PaymentController@success');

Route::get('error', 'App\Http\Controllers\PaymentController@error');
