<?php

namespace App\Http\Controllers;

use App\Models\NilaiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        
        $result = DB::select("SELECT id_tukang, (kriteria_1 + kriteria_2 + kriteria_3 + kriteria_4) AS NilaiAkhir
        FROM (
            SELECT id_tukang, 
            (kriteria_1*(select normalisasi from kriteria WHERE id_kriteria = 1)) AS kriteria_1, 
            (kriteria_2*(select normalisasi from kriteria WHERE id_kriteria = 2)) AS kriteria_2, 
            (kriteria_3*(select normalisasi from kriteria WHERE id_kriteria = 3)) AS kriteria_3, 
            (kriteria_4*(select normalisasi from kriteria WHERE id_kriteria = 4)) AS kriteria_4
            FROM (
                SELECT id_tukang, 
                ((kriteria_1-1)/(3-1)) as kriteria_1, 
                ((kriteria_2-1)/(3-1)) as kriteria_2, 
                ((kriteria_3-1)/(3-1)) as kriteria_3, 
                ((kriteria_4-1)/(3-1)) as kriteria_4
                FROM (
                    SELECT id_tukang, 
                    AVG(kriteria_1) AS kriteria_1, 
                    AVG(kriteria_2) AS kriteria_2, 
                    AVG(kriteria_3) AS kriteria_3, 
                    AVG(kriteria_4) AS kriteria_4 
                    FROM rating 
                    GROUP BY id_tukang) AS A ) 
                AS TABLENILAI ) 
            AS NORMALISASI
        GROUP BY id_tukang
        ORDER BY (kriteria_1 + kriteria_2 + kriteria_3 + kriteria_4) DESC");
        // dd($result);


        $data = json_decode(json_encode($result), true);
        
        foreach ($data as $datas)
        {
            $hasil = NilaiModel::where('id_tukang', $datas['id_tukang'])->first();
            $hasil = NilaiModel::updateOrCreate(
                ['id_tukang' =>  $datas['id_tukang']],
                ['nilai_akhir' =>  $datas['NilaiAkhir']]
            );
        }


        $penilaian = DB::table('nilai')
        ->join('tukang', function($join)
        {
            $join->on('nilai.id_tukang', '=', 'tukang.id_tukang');
        })
        ->orderBy('nilai.nilai_akhir', 'desc')
        ->get();
        // dd($penilaian);
        return view('nilai.data_nilai', compact('penilaian'));

    }
}