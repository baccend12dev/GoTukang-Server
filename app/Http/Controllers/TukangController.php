<?php

namespace App\Http\Controllers;

use App\Models\DetailKategoriModel;
use App\Models\KategoriModel;
use App\Models\TukangModel;
use App\Models\PelangganModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TukangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $tukang = TukangModel::all();
        return view('tukang.data_tukang', ['tukang'=>$tukang]);

    }

    public function show($id){
        $data = TukangModel::find($id);
        $kategori = KategoriModel::all();
        $detail_kategori = DetailKategoriModel::all();

        $kategori_tukang = DB::table('tukang')
        ->join('detail_kategori', function($join)
        {
            $join->on('detail_kategori.id_tukang', '=', 'tukang.id_tukang');
        })
        ->join('kategori', function($join)
        {
            $join->on('kategori.id_kategori', '=', 'detail_kategori.id_kategori');
        })
        // ->select('kategori.nama_kategori', 'kategori.gambar_kategori')
        ->where('tukang.id_tukang', '=', $id)
        ->get();

        $pesanan = DB::table('tukang')
        ->join('pesanan', function($join)
        {
            $join->on('tukang.id_tukang', '=', 'pesanan.id_tukang');
        })
        ->join('pelanggan', function($join)
        {
            $join->on('pesanan.id_pelanggan', '=', 'pelanggan.id_pelanggan');
        })
        ->where('pelanggan.id_pelanggan', '=', $id)
        ->get();

        // ->toSql();
        // $kategori_tukang = collect($kategori_tukang)->map(function($x){ return (array) $x; })->toArray();
        // $kategori_tukang = $kategori_tukang->toArray();
        // $kategori_tukang = json_decode($dataJson);

        // $kategori_tukang = json_decode(json_encode($dataJson), true);
        
        // dd($kategori_tukang);
        // dd($hari_bukas);
        return view('tukang.show_data_tukang', ['kategori_tukang' => $kategori_tukang, 'pesanan' => $pesanan], compact('data', 'kategori', 'detail_kategori'));
    }
    
    public function create(){
        return view('tukang.add_data_tukang');
    }

    public function store(Request $request){
        
        // $insert_data = new tukangModel();        
        // $insert_data->nama_tukang = $request->nama_tukang;
        // $insert_data->email_tukang = $request->email_tukang;
        // $insert_data->password_tukang = $request->password_tukang;
        // $insert_data->telp_tukang = $request->telp_tukang;
        // $insert_data->nama_toko = $request->nama_toko;
        // $insert_data->keterangan_toko = $request->keterangan_toko;
        // $insert_data->latitude_tukang = $request->latitude_tukang;
        // $insert_data->longitude_tukang = $request->longitude_tukang;
        // $insert_data->alamat_tukang = $request->alamat_tukang;
        // $insert_data->spesifikasi_tukang = $request->spesifikasi_tukang;
        // $insert_data->jangkauan_kategori_tukang = $request->jangkauan_kategori_tukang;
        // // $insert_data->hari_buka = $request->hari_buka;
        

        $insert_data = $request->all();

        if($request->hasFile('foto_tukang')){
            $file = $request->file('foto_tukang');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_tukang', $filename);
            $insert_data['foto_tukang'] = $filename;
        }else{
            return $request;
            $insert_data['foto_tukang'] = '';
        }

        TukangModel::create($insert_data);
        
        return redirect('/data_tukang');
    }

    public function edit($id){
        $data = TukangModel::find($id);
        return view('tukang.edit_data_tukang', compact('data'));

    }

    public function update(Request $request, $id){

        $data = TukangModel::find($id);

        $data->nama_tukang = $request->nama_tukang;
        $data->email_tukang = $request->email_tukang;
        $data->password_tukang = $request->password_tukang;
        $data->telp_tukang = $request->telp_tukang;
        $data->nama_jasa = $request->nama_jasa;
        $data->keterangan_jasa = $request->keterangan_jasa;
        $data->latitude_tukang = $request->latitude_tukang;
        $data->longitude_tukang = $request->longitude_tukang;
        $data->alamat_tukang = $request->alamat_tukang;
        $data->spesifikasi_tukang = $request->spesifikasi_tukang;
        $data->jangkauan_kategori_tukang = $request->jangkauan_kategori_tukang;
      
        
        if($request->hasFile('foto_tukang')){
            $file = $request->file('foto_tukang');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_tukang', $filename);
            $data->foto_tukang = $filename;
        }

        $data->save();

        return redirect('/data_tukang')->with('success', 'Data Tukang Berhasil Diupdate');
    }

    public function destroy($id){

        $data = TukangModel::find($id);
        $data->delete();

        return redirect('/data_tukang')->with('success', 'Data Tukang Berhasil Dihapus');
    }

    public function detail_kategori_create($id){

        $data = TukangModel::find($id);
        $detail_kategori = DetailKategoriModel::all();
        $tukang = TukangModel::all();

        // $tukang = tukangModel::pluck('nama_tukang', 'id_tukang');

        $kategori = KategoriModel::all();
        // $ukuran = UkuranModel::all();
        
        return view('tukang.add_data_detail_kategori', compact('data','detail_kategori', 'tukang', 'kategori'));
    }

    public function detail_kategori_store(Request $request){

        // $data = tukangModel::find($id);
        $insert_data = $request->all();
        DetailKategoriModel::create($insert_data);


        // return view('tukang.add_data_detail_kategori', compact('data'));
        return redirect('/data_tukang');
    }

    public function detail_kategori_edit($id){
        $data = DetailKategoriModel::find($id);
        $detail_kategori = DetailKategoriModel::all();
        $tukang = TukangModel::all();
        $kategori = KategoriModel::all();

        return view('tukang.edit_data_detail_kategori', compact('data','detail_kategori', 'tukang', 'kategori'));
    }

    public function detail_kategori_update(Request $request, $id){
        $data = DetailKategoriModel::find($id);

        $data->id_tukang = $request->id_tukang;
        $data->id_kategori = $request->id_kategori;
        $data->keterangan_kategori = $request->keterangan_kategori;
        $data->ongkos_tukang = $request->ongkos_tukang;
        $data->perkiraan_lama_waktu_pengerjaan = $request->perkiraan_lama_waktu_pengerjaan;
        $data->save();        
        // DetailKategoriModel::find($data);
        return redirect('/data_tukang');
    }


    public function detail_kategori_destroy($id){
        $data = DetailKategoriModel::find($id);
        $data->delete();

        return redirect()->back();
    }

    
} 

