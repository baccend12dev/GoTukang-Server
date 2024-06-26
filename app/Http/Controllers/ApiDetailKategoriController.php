<?php

namespace App\Http\Controllers;

use App\Models\DetailKategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiDetailKategoriController extends Controller
{
    public function get_all_detail_kategori(){

        $detail_kategori = DetailKategoriModel::all();
        
        return response()-> json($detail_kategori, 200);

        // return response()->json(DetailKategoriModel::all(), 200);
    }

    public function get_data_by_kategori($id){

        $response = DB::table('detail_kategori')
        ->join('tukang', 'tukang.id_tukang', '=', 'detail_kategori.id_tukang')
        ->join('kategori', 'kategori.id_kategori', '=', 'detail_kategori.id_kategori')
        ->where('kategori.id_kategori', '=', $id)
        ->get();

        return response()->json($response, 200);
    }

    public function get_data_kategori_by_tukang($id){
        $response = DB::table('detail_kategori')
        ->join('tukang', 'tukang.id_tukang', '=', 'detail_kategori.id_tukang')
        ->join('kategori', 'kategori.id_kategori', '=', 'detail_kategori.id_kategori')
        ->where('tukang.id_tukang', '=', $id)
        ->get();

        return response()->json($response, 200);
    }

    public function insert_data_detail_kategori(Request $request){
        $insert_detail_kategori = new DetailKategoriModel;

        $insert_detail_kategori->id_tukang = $request->idTukang;
        $insert_detail_kategori->id_kategori = $request->idKategori;
        $insert_detail_kategori->keterangan_kategori = $request->keteranganKategori;
        $insert_detail_kategori->keunggulan = $request->Keunggulan;
        $insert_detail_kategori->ongkos_tukang = $request->ongkosTukang;
        $insert_detail_kategori->perkiraan_lama_waktu_pengerjaan = $request->perkiraanLamaWaktuPengerjaan;
        $insert_detail_kategori->save();

        return response([
            'status' => 'OK',
            'message' => 'Data berhasil ditambahkan',
            'data' => $insert_detail_kategori,
        ], 200);
    }

    public function update_data_detail_kategori(Request $request, $id){

        $check_detail_kategori = DetailKategoriModel::firstWhere('id_detail_kategori', $id);

        if($check_detail_kategori){
            //data tersedia

            $data_detail_kategori = DetailKategoriModel::find($id);

            $data_detail_kategori->id_tukang = $request->idTukang;
            $data_detail_kategori->id_kategori = $request->idKategori;
            $data_detail_kategori->keterangan_kategori = $request->keteranganKategori;
            $data_detail_kategori->keunggulan = $request->Keunggulan;
            $data_detail_kategori->ongkos_tukang = $request->ongkosTukang;
            $data_detail_kategori->perkiraan_lama_waktu_pengerjaan = $request->perkiraanLamaWaktuPengerjaan;
            $data_detail_kategori->save();

            return response([
                'status' => 'OK',
                'message' => 'Data berhasil diupdate',
                'data' => $data_detail_kategori,
            ], 200);
        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }
    }

    public function delete_data_detail_kategori(Request $request, $id){
        
        $check_detail_kategori = DetailKategoriModel::firstWhere('id_detail_kategori', $id);

        if($check_detail_kategori){
            //data tersedia

            $data_detail_kategori = DetailKategoriModel::destroy($id);

            return response([
                'status' => 'OK',
                'message' => 'Data berhasil dihapus',
                'data' => $data_detail_kategori,
            ], 200);
        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        } 
    }
}
