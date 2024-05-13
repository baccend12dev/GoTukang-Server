<?php

namespace App\Http\Controllers;

use App\Models\DetailKategoriModel;
use App\Models\KategoriModel;
use App\Models\TukangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailKategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $tukang = TukangModel::all();
        $kategori_tukang = DetailKategoriModel::all();

        $detail_kategori = DB::table('detail_kategori')
        ->join('tukang', function($join)
        {
            $join->on('detail_kategori.id_tukang', '=', 'tukang.id_tukang');
        })
        ->join('kategori', function($join)
        {
            $join->on('detail_kategori.id_kategori', '=', 'kategori.id_kategori');
        })
        ->orderBy('tukang.nama_tukang', 'asc')
        ->orderBy('kategori.nama_kategori', 'asc')
        // ->groupBy('detail_kategori.id_detail_kategori')
        ->get();

        // dd($detail_kategori);
        
        return view('detail_kategori.data_detail_kategori', compact('detail_kategori', 'tukang', 'kategori_tukang'));
    }

    public function create(){

        $detail_kategori = DetailKategoriModel::all();
        $tukang = TukangModel::all();
        $kategori = KategoriModel::all();        
        return view('detail_kategori.add_data_detail_kategori', compact('detail_kategori', 'tukang', 'kategori'));
    }

    public function store(Request $request){

        $insert_data = $request->all();
        DetailKategoriModel::create($insert_data);
        
        return redirect('/data_detail_kategori')->with('success', 'Data Detail Kategori Berhasil Ditambahkan');
    }

    public function edit($id){
        $data = DetailKategoriModel::find($id);
        $detail_kategori = DetailKategoriModel::all();
        $tukang = tukangModel::all();
        $kategori = KategoriModel::all();

        return view('detail_kategori.edit_data_detail_kategori', compact('data','detail_kategori', 'tukang', 'kategori'));
    }

    public function update(Request $request, $id){
        $data = DetailKategoriModel::find($id);

        $data->id_tukang = $request->id_tukang;
        $data->id_kategori = $request->id_kategori;
        $data->keterangan_kategori = $request->keterangan_kategori;
        $data->keunggulan = $request->keunggulan;
        $data->ongkos_tukang = $request->ongkos_tukang;
        $data->perkiraan_lama_waktu_pengerjaan = $request->perkiraan_lama_waktu_pengerjaan;
        $data->save();

        // $data = $request->all();
        
        // DetailKategoriModel::find($data);
        return redirect('/data_detail_kategori');
    }

    public function destroy($id){
        $data = DetailKategoriModel::find($id);
        $data->delete();

        return redirect('/data_detail_kategori');
    }
}