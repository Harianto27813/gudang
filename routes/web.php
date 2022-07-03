<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
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

route::get('/user',[UserController::class,'index']);
route::get('/barang',[BarangController::class,'index'])->name('barang');
route::get('/barang/binput',[BarangController::class,'create'])->name('barang.binput');
route::post('/barang/binput',[BarangController::class,'store'])->name('barang.binput');
route::put('/barang/{id}/bedit',[BarangController::class,'edit'])->name('barang.bedit');
route::get('/barang/{id}',[BarangController::class,'delete'])->name('barang.delete');
route::view('/barangmasuk','gudang.b_masuk');
route::view('/barangkeluar','gudang.b_keluar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');