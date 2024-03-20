<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Route::get('/beasiswa/daftar', [BeasiswaController::class, 'create'])->name('beasiswa.create');


Route::resource('beasiswa', BeasiswaController::class)->middleware('auth');
Route::get('/get-mhs/{nim}', [MahasiswaController::class, 'getMahasiswa'])->name('getMhs');