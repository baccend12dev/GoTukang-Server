<?php

namespace App\Http\Controllers;

use App\Models\KriteriaModel;
use App\Models\RatingModel;
use App\Models\TukangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $rating = RatingModel::all();
        $tukang = TukangModel::all();
        $kriteria = KriteriaModel::all();

        $rating_tukang = DB::table('rating')
        ->join('tukang', function($join)
        {
            $join->on('rating.id_tukang', '=', 'tukang.id_tukang');
        })
        ->get();

        return view('rating.data_rating', compact('rating_tukang','tukang'));
    }

    public function create(){
        $tukang = TukangModel::all();

        return view('rating.add_data_rating', compact('tukang'));

    }

    public function store(Request $request){
        
        $insert_data = $request->all();
        RatingModel::create($insert_data);
        
        return redirect('/data_rating')->with('success', 'Data Rating Berhasil Ditambahkan');

        // $insert_data = new RatingModel();
        
        // $insert_data->id_tukang = $request->id_tukang;
        // $insert_data->id_kriteria = $request->id_kriteria;
        // $insert_data->rating_tukang = $request->rating_tukang;

        // $insert_data->save();

        // return redirect('/data_rating');
    }

    public function edit($id){
        $data = RatingModel::find($id);
        $tukang = TukangModel::all();
        return view('rating.edit_data_rating', compact('data','tukang'));
    }

    public function update(Request $request, $id){

        $data = RatingModel::find($id);

        // $data->id_tukang = $request->id_tukang;
        // $data->id_kriteria = $request->id_kriteria;
        // $data->rating_tukang = $request->rating_tukang;
        $data->id_tukang = $request->id_tukang;
        $data->kriteria_1 = $request->kriteria_1;
        $data->kriteria_2 = $request->kriteria_2;
        $data->kriteria_3 = $request->kriteria_3;
        $data->kriteria_4 = $request->kriteria_4;  
        
        $data->save();

        return redirect('/data_rating')->with('success', 'Data Rating Berhasil Diupdate');
    }

    public function destroy($id){

        $data = RatingModel::find($id);
        $data->delete();

        return redirect('/data_rating')->with('success', 'Data Rating Berhasil Diupdate');
    }
}