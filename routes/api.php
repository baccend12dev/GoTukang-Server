<?php

use App\Http\Controllers\ApiDetailKategoriController;
use App\Http\Controllers\ApiKategoriController;
use App\Http\Controllers\ApiNilaiController;
use App\Http\Controllers\ApiPelangganController;
use App\Http\Controllers\ApiPilihJenisController;
use App\Http\Controllers\ApiRatingController;
use App\Http\Controllers\ApiTukangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//================Api Pelanggan========
Route::get('pelanggan', [ApiPelangganController::class, 'get_all_pelanggan']);
Route::get('pelanggan/{id_pelanggan}', [ApiPelangganController::class, 'get_data_pelanggan_by_id']);
Route::get('file', 'ApiPelangganController@file');
Route::post('file', 'ApiPelangganContoroller@fileSave');
Route::post('pelanggan/insert_data', [ApiPelangganController::class, 'insert_data_pelanggan']);
Route::post('pelanggan/update/{id_pelanggan}', [ApiPelangganController::class, 'update_data_pelanggan']);
Route::post('pelanggan/delete/{id_pelanggan}', [ApiPelangganController::class,'delete_data_pelanggan']);

//============= Api Data Tukang ==================
Route::get('tukang', [ApiTukangController::class, 'get_all_tukang']);
Route::get('tukang/{id_tukang}', [ApiTukangController::class, 'get_data_tukang_by_id']);
Route::post('tukang/insert_data', [ApiTukangController::class, 'insert_data_tukang']);
Route::post('tukang/update/{id_tukang}', [ApiTukangController::class, 'update_data_tukang']);
Route::post('tukang/delete/{id_tukang}', [ApiTukangController::class, 'delete_data_tukang']);
//============= Api Data Tukang ==================

//============= Api Data Rating ==================
Route::get('rating', [ApiRatingController::class,'get_all_rating']);
Route::get('kriteria', [ApiRatingController::class,'get_all_kriteria']);
Route::post('rating/insert_data', [ApiRatingController::class, 'insert_data_rating']);
Route::post('rating/update/{id_rating}', [ApiRatingController::class, 'update_data_rating']);
Route::post('rating/delete/{id_rating}', [ApiRatingController::class,'delete_data_rating']);
//============= Api Data Rating End ==================

//============= Api Data Nilai ==================
Route::get('nilai', [ApiNilaiController::class,'get_all_nilai']);
//============= Api Data Nilai End ==================

//============= Api Data Kategori ==================
Route::get('kategori', [ApiKategoriController::class, 'get_all_kategori']);
Route::post('kategori/insert_data', [ApiKategoriController::class,'insert_data_kategori']);
Route::post('kategori/update/{id_kategori}', [ApiKategoriController::class, 'update_data_kategori']);
Route::post('kategori/delete/{id_kategori}', [ApiKategoriController::class,'delete_data_kategori']);
//============= Api Data Kategori END ==================

//============= Api Data Detail Kategori ==================
Route::get('detail_kategori', [ApiDetailKategoriController::class, 'get_all_detail_kategori']);
Route::get('detail_kategori/get_kategori/{id_kategori}', [ApiDetailKategoriController::class, 'get_data_by_kategori']);
Route::get('detail_kategori/get_tukang/{id_tukang}', [ApiDetailKategoriController::class,'get_data_kategori_by_penjahit']);
Route::post('detail_kategori/insert_data', [ApiDetailKategoriController::class,'insert_data_detail_kategori']);
Route::post('detail_kategori/update/{id_detail_kategori}', [ApiDetailKategoriController::class, 'update_data_detail_kategori']);
Route::post('detail_kategori/delete/{id_detail_kategori}', [ApiDetailKategoriController::class, 'delete_data_detail_kategori']);
//============= Api Data Detail Kategori End ==================

//==============peilihjenis
Route::get('kategori', [ApiPilihJenisController::class, 'get_all_jenis']);

