<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DataMasterController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PegawaiController;

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
Auth::routes();
Route::get('/', [MainController::class, 'index'])->name('index');

//Route::get('/makanan', [DataMasterController::class, 'makanan'])->name('makanan');
Route::get('/minuman', [DataMasterController::class, 'minuman'])->name('minuman');
//Route::get('/pelanggan', [DataMasterController::class, 'pelanggan'])->name('pelanggan');
//Route::get('/pegawai', [DataMasterController::class, 'pegawai'])->name('pegawai');
Route::get('/pengeluaran', [DataMasterController::class, 'pengeluaran'])->name('pengeluaran');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::resource('makanan', MakananController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('pegawai', PegawaiController::class);

