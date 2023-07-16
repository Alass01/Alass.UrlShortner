<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;



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

// Route::get('/',  'App\Http\Controllers\Urlscontroller@create');

// Route::get('/', [App\Http\Controllers\Urlscontroller::class, 'create']);


// Route::post('/','App\Http\Controllers\Urlscontroller@store');

// Route::get('/{shortner}','App\Http\Controllers\Urlscontroller@show');ftr()
Route::resource('welcome', App\Http\Controllers\Urlscontroller::class);