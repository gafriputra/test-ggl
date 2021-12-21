<?php

use App\Http\Controllers\Soal1Controller;
use App\Http\Controllers\Soal2Controller;
use App\Http\Controllers\Soal3Controller;
use App\Http\Controllers\Soal4Controller;
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
    return view('welcome');
});

Route::resource('soal-1', Soal1Controller::class);
Route::resource('soal-2', Soal2Controller::class);
Route::resource('soal-3', Soal3Controller::class);
Route::resource('soal-4', Soal4Controller::class);
