<?php

use App\Http\Controllers\DetailKategoriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PilihJenisController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\TukangController;
use App\Models\NilaiModel;
use Illuminate\Support\Facades\Route;
 


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


Route::get('/', function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [HomeController::class, 'dashboard']);

//========Pelanggan==========
Route::get('/data_pelanggan',[PelangganController::class, 'index']);
Route::get('/data_pelanggan/add', [PelangganController::class, 'create']);
Route::get('/data_pelanggan/show/{id}', [PelangganController::class, 'show']);
Route::post('/data_pelanggan/store', [PelangganController::class, 'store']);
Route::get('/data_pelanggan/edit/{id}', [PelangganController::class, 'edit']);
Route::post('/data_pelanggan/update/{id}', [PelangganController::class, 'update']);
Route::get('/data_pelanggan/delete/{id}', [PelangganController::class, 'destroy']);
//========Pelanggan end==========

//========Tukang===========
Route::get('/data_tukang', [TukangController::class, 'index']);
Route::get('/data_tukang/add', [TukangController::class, 'create']);
Route::get('/data_tukang/show/{id}', [TukangController::class, 'show']);
Route::post('/data_tukang/store', [TukangController::class, 'store']);
Route::get('/data_tukang/edit/{id}', [TukangController::class,'edit']);
Route::post('/data_tukang/update/{id}', [TukangController::class,'update']);
Route::get('/data_tukang/delete/{id}', [TukangController::class, 'destroy']);
Route::get('/data_tukang/show/kategori/add/{id}', [TukangController::class, 'detail_kategori_create']);
Route::post('/data_tukang/show/kategori/store', [TukangController::class,'detail_kategori_store']);
Route::get('/data_tukang/show/kategori/edit/{id}', [TukangController::class,'detail_kategori_edit']);
Route::post('/data_tukang/show/kategori/update/{id}', [TukangController::class, 'detail_kategori_update']);
Route::get('/data_tukang/show/kategori/delete/{id}', [TukangController::class, 'detail_kategori_destroy']);

//=====================Tukang end====================

//========kategori============
Route::get('/data_kategori', [KategoriController::class, 'index']);
Route::get('/data_kategori/add', [KategoriController::class, 'create']);
Route::post('/data_kategori/store', [KategoriController::class, 'store']);
Route::get('/data_kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::post('/data_kategori/update/{id}', [KategoriController::class, 'update']);
Route::get('/data_kategori/delete/{id}', [KategoriController::class, 'destroy']);
//=====================kategori end ================

//===========DetailKategori==================
Route::get('data_detail_kategori',[DetailKategoriController::class,'index']);
Route::get('/data_detail_kategori/add', [DetailKategoriController::class, 'create']);
Route::get('/data_detail_kategori/show/{id}', [DetailKategoriController::class, 'detail_ukuran']);
Route::post('/data_detail_kategori/store', [DetailKategoriController::class, 'store']);
Route::get('/data_detail_kategori/edit/{id}', [DetailKategoriController::class, 'edit']);
Route::post('/data_detail_kategori/update/{id}', [DetailKategoriController::class, 'update']);
Route::get('/data_detail_kategori/delete/{id}', [DetailKategoriController::class, 'destroy']);

//===============end==========================

//============pesananan=============
Route::get('/data_pesanan', [PesananController::class,'index']);

Route::post('/data_pesanan/store', [PesananController::class, 'store']);
Route::get('/data_pesanan/delete/{id}', [PesananController::class,'destroy']);
Route::get('/data_pesanan/show/{id}', [PesananController::class,'show']);
// Route::get('/data_pesanan/add', [PesananController::class, 'create']);
// Route::post('/data_pesanan/store', [PesananController::class, 'store']);
Route::get('/data_pesanan/edit/{id}', [PesananController::class, 'edit']);
Route::post('/data_pesanan/update/{id}', [PesananController::class,'update']);
//=====================end====================

//==================kriteria==============
Route::get('/data_kriteria', [KriteriaController::class, 'index']);
Route::get('/data_kriteria/add', [KriteriaController::class, 'create']);
Route::post('/data_kriteria/store', [KriteriaController::class, 'store']);
Route::get('/data_kriteria/edit/{id}', [KriteriaController::class, 'edit']);
Route::post('/data_kriteria/update/{id}', [KriteriaController::class, 'update']);
Route::get('/data_kriteria/delete/{id}', [KriteriaController::class, 'destroy']);
//===========================================end

//====================rating============
Route::get('/data_rating', [RatingController::class, 'index']);
Route::get('/data_rating/add', [RatingController::class, 'create']);
Route::post('/data_rating/store', [RatingController::class, 'store']);
Route::get('/data_rating/edit/{id}', [RatingController::class, 'edit']);
Route::post('/data_rating/update/{id}', [RatingController::class, 'update']);
Route::get('/data_rating/delete/{id}', [RatingController::class, 'destroy']);
//===========================================end

//=============NIlai
Route::get('/data_nilai', [NilaiController::class, 'index']);
//=================

//==================jeni kebutuhan
Route::get('/data_jenis', [PilihJenisController::class, 'index']);
Route::get('/data_jenis/add', [PilihJenisController::class, 'create']);
Route::post('/data_jenis/store', [PilihJenisController::class, 'store']);
Route::get('/data_jenis/delete/{id}', [PilihJenisController::class, 'destroy']);
//===================end














