<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\JenisBukuController;
use App\Http\Controllers\RakBukuController;
use App\Http\Controllers\UserController;
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
    return view('home0176');
});

// route export



// route resource
Route::resource('buku0176', BukuController::class);
Route::resource('jenis0176', JenisBukuController::class);
Route::resource('rak0176', RakBukuController::class);
Route::resource('user0176', UserController::class);