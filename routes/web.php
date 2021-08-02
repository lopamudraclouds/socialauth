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
 // Social Authentication Routes...
Route::get('/', 'App\Http\Controllers\LoginController@index');
Route::get('auth/google', 'App\Http\Controllers\LoginController@googleredirect');
Route::get('signature', 'App\Http\Controllers\LoginController@signature')->name('signature');
Route::get('dashboard', 'App\Http\Controllers\LoginController@dashboard')->name('dashboard');
Route::post('save-signature', 'App\Http\Controllers\LoginController@saveSignature');
Route::get('success', 'App\Http\Controllers\LoginController@success');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
