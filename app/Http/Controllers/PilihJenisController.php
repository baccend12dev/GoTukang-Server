<?php

namespace App\Http\Controllers;

use App\Models\PilihJenisModel;
use Illuminate\Http\Request;

class PilihJenisController extends Controller
{
    public function index(){

        $pilihjeniss = PilihJenisModel::all();

        return view('pilihjenis.data_jenis', ['pilihjenis' => $pilihjeniss ]);
    }

    public function create(){
        return view('pilihjenis.add_data_jenis');
    }

    public function store(Request $request){
        
        $insert_data = new PilihJenisModel();
        
        $insert_data->nama_jenis = $request->input('nama_jenis');

        if($request->hasFile('gambar_jenis')){
            $file = $request->file('gambar_jenis');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_pilihjenis', $filename);
            $insert_data->gambar_jenis = $filename;
        }

        $insert_data->save();


        return redirect('/data_jenis');

        
    }

    public function edit($id){
        $data = PilihJenisModel::find($id);
        return view('pilihjenis.edit_data_jenis', compact('data'));
    }


    public function update(Request $request, $id) {
        $data = PilihJenisModel::find($id);

        $data->nama_jenis = $request->nama_jenis;
       
        
        if($request->hasFile('gambar_jenis')){
            $file = $request->file('gambar_jenis');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_jenis', $filename);
            $data->gambar_jenis = $filename;
        }

        $data->save();

        return redirect('/data_jenis')->with('success', 'Data pilih jenis Berhasil Diupdate');

    }

    public function destroy($id){

        // hapus data
        $data = PilihJenisModel::find($id);
        $data->delete();


        return redirect('/data_jenis')->with('success', 'Data jenis Berhasil Dihapus');
    }

}
