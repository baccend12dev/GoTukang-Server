<?php

namespace App\Http\Controllers;

use App\Models\TukangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiTukangController extends Controller
{
    public function get_all_tukang(){
        return response()->json(TukangModel::all(), 200);
    }

    public function get_data_tukang_by_id($id){
        $response = DB::table('tukang')
        ->where('tukang.id_tukang', '=', $id)
        ->leftJoin('nilai', 'nilai.id_tukang', 'tukang.id_tukang')
        ->get();

        return response()->json($response);

    }

    public function insert_data_tukang(Request $request){
        $insert_tukang = new TukangModel;


        $insert_tukang->nama_tukang = $request->nama_tukang;
        $insert_tukang->email_tukang = $request->email_tukang;
        $insert_tukang->password_tukang = $request->password_tukang;
        $insert_tukang->telp_tukang = $request->telp_tukang;
        $insert_tukang->nama_jasa = $request->nama_jasa;
        $insert_tukang->keterangan_jasa = $request->keterangan_jasa;
        $insert_tukang->latitude_tukang = $request->latitude_tukang;
        $insert_tukang->longitude_tukang = $request->longitude_tukang;
        $insert_tukang->alamat_tukang = $request->alamat_tukang;
        $insert_tukang->spesifikasi_tukang = $request->spesifikasi_tukang;
        $insert_tukang->jangkauan_kategori_tukang = $request->jangkauan_kategori_tukang;

        if ($request->hasFile('foto_tukang')){
            $file = $request->file('foto_tukang');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_tukang', $filename);
            $insert_tukang->foto_tukang = $filename;
        }

        $insert_tukang->save();

        return response([
            'status' => 'OK',
            'message' => 'Data Berhasil Ditambahkan',
            'data' => $insert_tukang,
        ], 200);
    }

    public function update(Request $request, $id){

        $check_tukang =TukangModel::firstWhere('id_tukang', $id);

        if($check_tukang){
            $data_tukang = TukangModel::find($id);

        $data_tukang->nama_tukang = $request->nama_tukang;
        $data_tukang->email_tukang = $request->email_tukang;
        $data_tukang->password_tukang = $request->password_tukang;
        $data_tukang->telp_tukang = $request->telp_tukang;
        $data_tukang->nama_jasa = $request->nama_jasa;
        $data_tukang->keterangan_jasa = $request->keterangan_jasa;
        $data_tukang->latitude_tukang = $request->latitude_tukang;
        $data_tukang->longitude_tukang = $request->longitude_tukang;
        $data_tukang->alamat_tukang = $request->alamat_tukang;
        $data_tukang->spesifikasi_tukang = $request->spesifikasi_tukang;
        $data_tukang->jangkauan_kategori_tukang = $request->jangkauan_kategori_tukang;
      
        
        if($request->hasFile('foto_tukang')){
            $file = $request->file('foto_tukang');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_tukang', $filename);
            $data_tukang->foto_tukang = $filename;
        }

        $data_tukang->save();

        return response([
            'status' => 'OK',
            'message' => 'Data Berhasil Diupdate',
            'data' => $data_tukang,
        ], 200);

        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => 'Data Tidak Ditemukan'
            ]);
        }    

    }

    public function delete_data_tukang(Request $request, $id){
        $check_tukang =TukangModel::firstWhere('id_tukang', $id);

        if($check_tukang){
            //data tersedia
            TukangModel::destroy($id);
            return response([
                'status' => 'OK',
                'message'=>'Data Berhasil Dihapus'
            ], 200);
        }else{
            return response([
                'status' => 'Not Found',
                'message' => 'Data Tidak Ditemukan'
            ], 404);
        }
    }
   
}


